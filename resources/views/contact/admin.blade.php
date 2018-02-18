@extends('layouts.dashboard')

@section('content')

<div class="hero">    
    <div class="hero-body">
		<h2 class="title is-3">Contact Form Requests</h2>
		@if($contacts->count())
			@foreach($contacts as $contact)
				<div class="box" id="contact-{{ $contact->id }}">
					<div class="level">
						<div class="level-left">
							<h4 class="level-item">
								<a href="mailto: {{ $contact->email }}">{{ $contact->fullname }}</a>
							</h4>
							<div class="level-item">
								{{ $contact->created_at->diffForHumans() }}
							</div>
						</div>
						<div class="level-right">
							<a href="#" class="button is-small is-info level-item">Reply</a>
							<ban-ip ip="{{ $contact->ip }}"></ban-ip>
							<delete-contact-message id="{{ $contact->id }}"></delete-contact-message>
						</div>
					</div>
					@if($contact->subject)
						<h4>{{ $contact->subject }}</h4>
					@endif
					<p>{{ $contact->message }}</p>
					<div class="level is-size-7 has-text-weight-bold has-text-grey">
						<div class="level-left">
							<div class="level-item">
								Email: <a href="mailto: {{ $contact->email }}"> {{ $contact->email }}</a>
							</div>
							<div class="level-item">
								IP: {{ $contact->ip }}
							</div>
							<div class="level-item">
								Phone: {{ $contact->contact_number }}
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@else
			<p class="has-text-danger">No contact request has been submitted</p>
		@endif
    </div>
</div>

@endsection