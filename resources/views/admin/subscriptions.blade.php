@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h2 class="title is-3">Subscriptions</h2>

		@if( count($subscriptions) > 0 )
			@each('dashboard.includes.subscription', $subscriptions, 'sub')
		@endif
	</div>
</div>

@endsection