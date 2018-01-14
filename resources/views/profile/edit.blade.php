@extends('layouts.dashboard_form')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h2 class="title is-3">
			<span class="icon"><i class="fa fa-user"></i></span>
			<span>Edit Profile</span>
		</h2>
		@include('includes.notification')
		<form action="{{ route('edit_profile') }}" method="post">
			{{ csrf_field() }}
			<div class="field">
				<h3 class="title is-6">Personal Information</h3>
			</div>
			<div class="field">
				<div class="control">
					<input type="text" name="email" value="{{ $user->email }}" placeholder="Email Address" class="input">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="text" name="fullname" value="{{ $user->fullname }}" placeholder="Fullname" class="input">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="text" name="city" value="{{ $user->city }}" placeholder="City" class="input">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="text" name="state" value="{{ $user->state }}" placeholder="State" class="input">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="text" name="phone_number" value="{{ $user->phone_number }}" placeholder="Phone number" class="input">
				</div>
			</div>

			<div class="field" style="margin-top: 2em">
				<h3 class="title is-6">Change Password</h3>
			</div>
			<div class="field">
				<div class="control">
					<input type="password" name="password" id="" placeholder="New password" class="input {{ ($errors->has('password')) ? 'is-danger' : '' }}">
					@if($errors->has('password'))
						<span class="help is-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="password" name="password_confirmation" id="" placeholder="Confirm new password" class="input">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<button type="submit" class="button is-link">
						Save Profile
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection