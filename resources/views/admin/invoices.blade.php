@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h2 class="title is-3"><span class="icon"><i class="fa fa-credit-card"></i></span> Invoices</h2>
		<h4 class="title is-5">Unpaid invoices</h4>
		@if(count($unpaid_invoices) > 0)
			@include('invoice.invoice-table', ['invoices' => $unpaid_invoices])
		@else
			<p>You do not have any unpaid invoices yet</p>
		@endif
		<hr>
		<h4 class="title is-5">Paid invoices</h4>
		@if(count($paid_invoices) > 0)
			@include('invoice.invoice-table', ['invoices' => $paid_invoices])
		@else
			<p>You do not have any paid invoices yet</p>
		@endif
	</div>
</div>


@endsection