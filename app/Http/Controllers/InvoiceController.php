<?php

namespace App\Http\Controllers;

use App\Model\Invoice;
use Illuminate\Support\Facades\Gate;
use App\Transformers\InvoiceTransformer;
use Illuminate\Http\Request;
use App\Traits\Orderable;

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
}
