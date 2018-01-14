<div class="card">
	<div class="card-content">
		<div class="level">
			<div class="level-left">
				<div>
					<h3 class="title is-5">{{ $invoice['subscription']['domain_name'] }}</h3>
					{!! $invoice['description'] !!}
					<h4 class="title is-7">Invoice no: {{ $invoice['id'] }} &nbsp;&nbsp;&nbsp;&nbsp; Total: <span class="naira">{{ number_format($invoice['amount']) }}</span></h4>
				</div>
			</div>
			<div class="level-right">
				<div class="field is-grouped">
					<p class="control">
						@if($invoice['is_paid'] === 0)
							<a href="{{ route('show_invoice', ['invoice'=>$invoice['id']]) }}" class="button is-small is-success">Pay Now</a>
						@else
							<span class="button is-small is-success is-rounded"><span class="icon"><i class="fa fa-check"></i></span> <span>Paid!</span></span>
						@endif
					</p>
				</div>
			</div>
		</div>
	</div>
</div>