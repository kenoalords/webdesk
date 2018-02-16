@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h2 class="title is-2">{{ $subscription['domain_name'] }}</h2>
		<h4 class="subtitle is-6 has-text-danger">{{ $subscription['package']['name'] }}</h4>	

		<div class="level is-mobile">
			<div class="level-left">
				<div class="level-item">Date created: {{ $subscription['created_at'] }}</div>
				<div class="level-item">Billing cycle: {{ $subscription['renew_interval'] }} Month(s)</div>
				<div class="level-item">Status: {{ ($subscription['is_active']) ? 'Active' : 'Inactive' }}</div>
			</div>
		</div>

		@if( $subscription['notes'] !== '' )
			<h4 class="title is-6 is-marginless">Additional Notes</h4>
			<p>{{ $subscription['notes'] }}</p>
		@endif

		@if(Auth::user() && Auth::user()->is_admin === 1)
		<div class="card">
			<div class="card-content">
				<div class="level is-mobile">
					<div class="level-left">
						<div class="level-item">
							<h4 class="title is-6 is-marginless">
								<span class="icon"><i class="fa fa-user"></i></span>
								<span>{{ $subscription['user']['fullname'] }}</span>
							</h4>
						</div>
						<div class="level-item">{{ $subscription['user']['location'] }}</div>
						<div class="level-item">
							<span class="icon"><i class="fa fa-phone"></i></span>
							<span>{{ $subscription['user']['phone'] }}</span>
						</div>
						<div class="level-item"><a href="mailto: {{ $subscription['user']['email'] }}">{{ $subscription['user']['email'] }}</a></div>
					</div>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>		

@endsection