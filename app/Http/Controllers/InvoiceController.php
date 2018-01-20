<?php

namespace App\Http\Controllers;

use Mail;
use App\Model\Subscription;
use App\Model\User;
use App\Model\Invoice;
use Illuminate\Support\Facades\Gate;
use App\Transformers\InvoiceTransformer;
use App\Transformers\SubscriptionTransformer;
use Illuminate\Http\Request;
use App\Traits\Orderable;
use App\Mail\InvoiceGenerationNotification;

class InvoiceController extends Controller
{
    use Orderable;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function showInvoice(Invoice $invoice)
	{
		if( Gate::denies('view-invoice', $invoice) ){
			die('You cannot view this resource');
			exit;
		}
        $invoice = fractal()->item($invoice)->transformWith(new InvoiceTransformer)->toArray();
		return view('invoice.invoice')->with('invoice', $invoice);
	}

    public function showReceipt(Invoice $invoice)
    {
        if( Gate::denies('view-invoice', $invoice) ){
            die('You cannot view this resource');
            exit;
        }
        $invoice = fractal()->item($invoice)->transformWith(new InvoiceTransformer)->toArray();
        return view('invoice.receipt')->with('invoice', $invoice);
    }

    public function invoices(Request $request)
    {
            $invoices = fractal()->collection($request->user()->invoice()->latestFirst()->get())->transformWith(new InvoiceTransformer)->toArray();
    		return view('invoice.invoices')->with('invoices', $invoices);
    }

    public function generateInvoice(Request $request)
    {
        return view('invoice.generate');
    }

    // Process and notify user on generated invoice
    public function submitGeneratedInvoice(Request $request, Invoice $invoice)
    {
        $request->validate([
            'amount'    => 'required|integer',
            'description'   => 'required|string'
        ]);
        $sub = Subscription::find($request->subscription_id);
        $user = User::find($request->user_id);
        // dd($sub);
        $invoice_id = $invoice->create([
            'user_id'   => $request->user_id,
            'package_id'=> $sub->package_id,
            'subscription_id'=> $sub->id,
            'amount'    => $request->amount,
            'uid'       => uniqid(true),
            'description' => $request->description,
        ]);
        // dd($user);
        Mail::to($user)->send(new InvoiceGenerationNotification($invoice_id->id));
        $request->session()->flash('status', 'Invoice: #'.$invoice_id->id.' generated successfully');
        return redirect()->route('generate_invoice');
    }


    // Get user subscription
    public function getUserSubscription(Request $request)
    {
        $subscriptions = fractal()->collection(Subscription::where('user_id', $request->user_id)->get())
                                ->transformWith(new SubscriptionTransformer())
                                ->toArray();

        return response()->json($subscriptions, 200);
    }
}
