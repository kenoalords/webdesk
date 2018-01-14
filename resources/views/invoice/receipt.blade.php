@extends('layouts.payment')

@section('content')
<h2 class="title is-4"><span class="icon has-text-success"><i class="fa fa-check-circle"></i></span> Thank you for your purchase</h2>
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
			<h5 class="title is-7 has-text-grey-light is-marginless">Received from:</h5>
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
		</div>
	</div>
</div>


@endsection