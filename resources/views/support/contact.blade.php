@extends('layouts.dashboard_form')

@section('content')

<h2 class="title is-4"><span class="icon"><i class="fa fa-envelope"></i></span> Contact Us</h2>
@include('includes.notification')
<form action="{{ route('admin_contact') }}" method="post">
	{{ csrf_field() }}
	<div class="field">
		<div class="control">
			<h4 class="label">Select subscription</h4>
			<div class="select">
				<select name="subscription_id" id="">
					@foreach($subscriptions as $sub)
						<option value="{{ $sub['id'] }}">{{ $sub['package']['name'] }} - {{ $sub['domain_name'] }}</option>
					@endforeach
				</select>
			</div>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<h4 class="label">Department</h4>
			<div class="select {{ ($errors->has('department')) ? 'is-danger' : '' }}">
				<select name="department" class="">
					<option value="None">Select department</option>
					<option value="Support">Support</option>
					<option value="Billing">Billing</option>
				</select>
			</div>
			@if($errors->has('department'))
				<span class="help is-danger">{{ $errors->first('department') }}</span>
			@endif
		</div>
	</div>
	<div class="field">
		<div class="control">
			<input type="text" name="subject" class="input {{ ($errors->has('subject')) ? 'is-danger' : '' }}" placeholder="Subject">
			@if($errors->has('subject'))
				<span class="help is-danger">{{ $errors->first('subject') }}</span>
			@endif
		</div>
	</div>
	<div class="field">
		<div class="control">
			<textarea name="message" class="textarea {{ ($errors->has('message')) ? 'is-danger' : '' }}" placeholder="Message"></textarea>
			@if($errors->has('message'))
				<span class="help is-danger">{{ $errors->first('message') }}</span>
			@endif
		</div>
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Submit</button>
		</div>
	</div>
</form>

@endsection