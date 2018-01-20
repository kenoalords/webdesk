@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h3 class="title is-4"><span class="icon"><i class="fa fa-credit-card"></i></span> Invoices</h3>
		
		
		@if(count($invoices) > 0)
			@include('invoice.invoice-table', ['invoices' => $invoices])
		@endif
	</div>
</div>

@endsection