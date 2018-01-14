@extends('layouts.payment')

@section('content')

<div class="card">
	<div class="card-content">
		<div class="level">
			<div class="level-left">
				<div class="level-item">
					<div>
						<a class="navbar-item" href="https://bulma.io">
		              			<img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
		              		</a>
		              		<h4 class="is-5 has-text-grey">Invoice No: {{ $invoice['id'] }}</h4>
		              </div>
				</div>
			</div>
			<div class="level-right">
				<div class="level-item">
					@if(!$invoice['is_paid'])
						<h4 class="is-5 has-text-danger">
							<span class="icon"><i class="fa fa-warning"></i></span>
							<span>Payment Pending</span>
						</h4>
					@else
						<h4 class="is-5 has-text-success">
							<span class="icon"><i class="fa fa-check"></i></span>
							<span>Paid</span>
						</h4>
					@endif
				</div>
			</div>
		</div>

		<div class="content">
			<p></p>
			<h5 class="title is-7 has-text-grey-light is-marginless">Bill To:</h5>
			<h4 class="title is-5 is-marginless">{{ $invoice['user']['fullname'] }}</h4>
			<p>{{ ucwords($invoice['user']['location']) }}</p>
			<table class="table is-bordered is-striped is-fullwidth">
				<thead>
					<tr>
						<th>Description</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>{!! $invoice['description'] !!}</td>
						<td><span class="naira has-text-weight-bold">{{ number_format($invoice['amount']) }}</span></td>
					</tr>
				</tbody>
				
			</table>
			@if( !$invoice['is_paid'] )
				<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
					<input type="hidden" name="email" value="{{ Auth::user()->email }}">
					<input type="hidden" name="orderID" value="{{ $invoice['uid'] }}">
					<input type="hidden" name="amount" value="{{ (int)$invoice['amount'] * 100 }}">
					<input type="hidden" name="quantity" value="1">
					<input type="hidden" name="metadata" value="{{ json_encode($array = ['invoice_id' => $invoice['id'],]) }}" >
					<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
					<input type="hidden" name="key" value="{{ config('paystack.secretKey') }}">
					{{ csrf_field() }}
					<button class="button is-block is-info is-medium" type="submit" value="Pay Now!">
			              Pay with Paystack <span class="naira">{{ number_format($invoice['amount']) }}</span>
			          </button>
				</form>
			@endif
			<div class="has-text-centered" style="margin-top: 2em">
				<img src="{{ asset('images/paystack.jpg') }}" alt="Powered by Paystack" style="width: 280px; height: auto;">
			</div>
			<hr>
			<p class="has-text-grey">Or via direct deposit</p>
			<div class="media">
				<figure class="media-left" style="margin: 0">
					<p class="image is-128x128">
						<img src="{{ asset('images/gtbank.jpg') }}" alt="GTBank Logo">
					</p>
				</figure>
				<div class="media-content">
					<div class="content" style="margin-left: 1em">
						<h3 class="title is-5" style="margin: 16px 0 10px 0">Clickmedia Solutions</h3>
						<h4 class="title is-6" style="margin: 0 0 10px 0">Bank Name: Guaranty Trust Bank</h4>
						<h4 class="title is-6" style="margin: 0 0 10px 0">Account No: 0127051573</h4>
					</div>
				</div>
			</div>
			<p class="has-text-grey">Kindly notify us via <a href="mailto:billing@example.com" class="is-link">billing@example.com</a> with your payment details</p>
		</div>
	</div>
</div>


@endsection