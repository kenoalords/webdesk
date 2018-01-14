<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Transformers\SubscriptionTransformer;
use App\Transformers\InvoiceTransformer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subscriptions = $request->user()->subscription()->get();
        $subscriptions = fractal()->collection($subscriptions)
                                ->transformWith(new SubscriptionTransformer())
                                ->toArray();
        $invoices = fractal()->collection($request->user()->invoice()->unPaidInvoices()->get())
                            ->transformWith(new InvoiceTransformer)
                            ->toArray();
        // dd($invoices);
        return view('dashboard.home')->with([
            'subscriptions' => $subscriptions,
            'invoices'      => $invoices,
        ]);
    }
}
