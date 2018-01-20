@extends('layouts.dashboard_form')

@section('content')

<h3 class="title is-4">Generate Invoice</h3>
@include('includes.notification')
<form action="{{ route('generate_invoice') }}" method="post">
	{{ csrf_field() }}
	<div class="field">
		<div class="control">
			@include('dashboard.composers.users')
		</div>
	</div>
	<div class="field">
		<div class="control">
			<div class="select is-block">
				<select name="subscription_id" id="users-select-subscription" style="width: 100%">
					<option value="0">Select subscription</option>
				</select>
			</div>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<input type="number" name="amount" class="input" placeholder="Amount to charge">
		</div>
	</div>
	<div class="field">
		<div class="control">
			<textarea name="description" class="textarea" placeholder="Description"></textarea>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<button class="button is-block is-link">
				Generate invoice
			</button>
		</div>
	</div>

</form>

<div class=" padded has-text-centered">
	<a href="/dashboard" class="has-text-grey">
		<span class="icon"><i class="fa fa-arrow-left"></i></span>
		<span>Back to dashboard</span>
	</a>
</div>

@endsection