@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<div class="level">
			<div class="level-left">
				<h2 class="title is-4"><span class="icon"><i class="fa fa-briefcase"></i></span> Subscriptions</h2>
			</div>
			<div class="level-right">
				<a href="{{ route('add_subscription') }}" class="button is-link">
					<span class="icon"><i class="fa fa-plus"></i></span>
					<span>Add subscription</span>
				</a>
			</div>
		</div>

		@if( count($subscriptions) > 0 )
			@each('dashboard.includes.subscription', $subscriptions, 'sub')
		@else
			<p class="has-text-danger">You do not have any subscriptions</p>
		@endif
	</div>
</div>

@endsection