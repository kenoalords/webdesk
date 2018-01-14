@extends('layouts.app')

@section('content')

<div class="hero single-page" id="slider" style="min-height: 420px">
    <div class="red-back" style="top: -250px; right: 0"></div>
    
    <div class="container" id="slider-content" style="margin-top: 7em">
        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered ">
                <h1 class="title is-1 has-text-white">Get in touch today</h1>
                <h4 class="subtitle has-text-white" style="margin-top: .5em">
                	We are available!
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="hero">
	<div class="hero-body">
		<div class="columns is-centered">
			<div class="column  is-three-quarters">
				<div class="columns">
					<div class="column is-8">
						@include('includes.notification')
						<form action="/contact" method="post">
							{{ csrf_field() }}
							<h3 class="title is-5">Use the form below to contact us</h3>
							<div class="field">
								<div class="control">
									<input type="text" name="fullname" placeholder="Your name" class="input {{ ($errors->has('fullname')) ? 'is-danger' : '' }}">
									@if($errors->has('fullname'))
										<span class="help is-danger">{{ $errors->first('fullname') }}</span>
									@endif
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input type="email" name="email" placeholder="Your email" class="input {{ ($errors->has('email')) ? 'is-danger' : '' }}">
									@if($errors->has('email'))
										<span class="help is-danger">{{ $errors->first('email') }}</span>
									@endif
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input type="text" name="contact_number" placeholder="Phone number (optional)" class="input">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input type="text" name="subject" placeholder="Subject (optional)" class="input">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<textarea name="message" class="textarea {{ ($errors->has('message')) ? 'is-danger' : '' }}" placeholder="Briefly describe how we can help you"></textarea>
									<input type="hidden" name="url">
									@if($errors->has('message'))
										<span class="help is-danger">{{ $errors->first('message') }}</span>
									@endif
								</div>
							</div>
							<div class="field">
								<div class="control">
									<button type="submit" class="button is-link is-large">
										Submit
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="column is-4">
						<h4 class="subtitle is-size-6 has-text-grey-lighter">Call us on</h4>
						<h3 class="title is-3"><a href="tel:09022422022">090 2242 2022</a></h3>

						<h4 class="subtitle is-size-6 has-text-grey-lighter" style="margin-top: 1em; margin-bottom: 0">Connect with us</h4>
						<ul class="social-links-sidebar">
							<li><a href="#"><span class="icon"><i class="fa fa-twitter"></i></span></a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-facebook"></i></span></a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-instagram"></i></span></a></li>
						</ul>

						<h4 class="subtitle is-size-6 has-text-grey-lighter" style="margin-top: 1em;">We are here</h4>
						<h3 class="title is-5">Ikeja, Lagos</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection