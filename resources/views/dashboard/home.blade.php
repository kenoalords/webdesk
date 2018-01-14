@extends('layouts.dashboard')

@section('content')


<div class="hero">
	<div class="hero-body">
		<h2 class="title is-4"><span class="icon"><i class="fa fa-dashboard"></i></span> Dashboard</h2>
		<h3 class="title is-5">{{ count($subscriptions) }} Subscriptions</h3>
		@if(count($subscriptions) > 0)
			@each('dashboard.includes.subscription', $subscriptions, 'sub')
		@endif
	</div>
</div>

@if(count($invoices) > 0)
	<div class="hero">
		<div class="hero-body">
			<h3 class="title is-5 ">{{ count($invoices) }} Unpaid Invoice</h3>
			@include('invoice.invoice-table', ['invoices' => $invoices])
		</div>
	</div>
@else
<div class="hero">
	<div class="hero-body">
		<h3 class="title is-5 ">Unpaid Invoices</h3>
		<p>You have no unpaid invoices</p>
	</div>
</div>
@endif

@endsection