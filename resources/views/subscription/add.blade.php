@extends('layouts.dashboard_form')

@section('content')


<h2 class="title is-4 has-text-grey">New Subscription</h2>
<form action="{{ route('add_subscription') }}" method="post" class="form">
	{{ csrf_field() }}
	<div class="field">
		@include('dashboard.composers.packages')
		@if( $errors->has('package') )
             <span class="help is-danger">{{ $errors->first('package') }}</span>
         @endif
         <p class="help">
         		Not sure which package suits your needs? <a href="/packages" target="_blank">Click here to view complete description</a>
         </p>
	</div>
	<div class="field">
		<div class="control">
			<h3 class="title is-5" style="margin-top: 2em">Domain name</h3>
			<p class="help">
				Please enter a domain name you would like us to register, if you already own this domain check the box below. If this is a new domain, <a href="https://www.godaddy.com/domains/domain-name-search" target="_blank">click here to check its availability</a>
			</p>
			<input type="text" name="domain" placeholder="www.example.com" class="input is-large {{ ($errors->has('domain')) ? 'is-danger' : 'is-primary' }}" value="{{ old('domain') }}">
			@if($errors->has('domain'))
			<span class="help is-danger">{{$errors->first('domain')}}</span>
			@endif
			<p style="margin-top: 1em">
				<label class="checkbox">
		               <input type="checkbox" name="has_domain" value="1" {{ (old('has_domain') == "1") ? 'checked' : '' }}>
		               I have registered this domain
		          </label>
	          </p>
	          <h3 class="title is-5" style="margin-top: 2em">Logo Design + <span class="naira">{{ number_format(config('builder.logo_cost')) }}</span></h3>
               <label class="checkbox">
                    <input type="checkbox" name="include_logo" value="1" {{ (old('include_logo') == "1") ? 'checked' : '' }}> Yes I want a new logo with this package
               </label>
		</div>
		<h3 class="title is-5" style="margin-top: 2em">How often do you want to renew this package</h3>
           <div class="control">
               <div class="select is-medium ">
                   <select name="renew_interval" id="renew_interval" style="width: 100%">
                       <option value="1">Monthly</option>
                       <option value="6">Every Six Months</option>
                       <option value="12">Yearly</option>
                   </select>
               </div>
           </div>
           <p class="help">Choose your billing cycle</p>
	</div>

	<div class="field">
		<div class="control">
			<h3 class="title is-5" style="margin-top: 2em">Tell us briefly about this website.</h3>
			<textarea name="notes" id="notes" class="textarea" placeholder="You can also include links of reference website you like"></textarea>
		</div>
	</div>
	<hr>
	<div class="field">
		<div class="control">
			@include('includes.terms')
		</div>
	</div>
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link is-medium">
				Order Package
			</button>
		</div>
	</div>
</form>
			

@endsection