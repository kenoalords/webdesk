<table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Package</th>
			<th><span class="naira"></span> Amount</th>
			<th>Date</th>
			<th>Status</th>
			@if(Auth::user() && Auth::user()->is_admin == 1)
			<th></th>
			@endif
		</tr>
	</thead>
	<tbody>
		@foreach($invoices as $invoice)
		<tr>
			<td>{{ $invoice['id'] }}</td>
			<td>{{ $invoice['user']['fullname'] }}</td>
			<td>
				<a href="{{ route('show_invoice', ['invoice'=>$invoice['id']]) }}" class="">
					{{ $invoice['subscription']['package']['name'] }} | {{ $invoice['subscription']['domain_name'] }}
				</a>
			</td>
			<td><span class="naira"></span>{{ number_format($invoice['amount']) }}</td>
			<td>{{ $invoice['date'] }}</td>
			<td class="is-narrow">
				@if($invoice['is_paid'] === 1)
					<span class="button is-small is-success"> 
						<span class="icon"><i class="fa fa-check"></i></span> <span>Paid</span>
					</span>
				@else
					<span class="button is-small is-danger"> 
						<span class="icon"><i class="fa fa-exclamation-triangle"></i></span> <span>Pending</span>
					</span>
				@endif
			</td>
			@if(Auth::user() && Auth::user()->is_admin == 1 && $invoice['is_paid'] === 0)
			<td class="is-narrow"><approve-payment id="{{ $invoice['id'] }}" key="{{ $invoice['id'] }}"></approve-payment></td>
			@endif
		</tr>
		@endforeach
	</tbody>
</table>