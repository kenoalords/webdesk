<form method="post" action="{{ route('subscribe') }}" id="audit-form">
	{{ csrf_field() }}
	<div class="field">
		<div class="control">
			<label for="fullname" class="label">Your name</label>
			<input type="text" name="fullname" id="fullname" class="input" placeholder="John Adeneye">
		</div>
	</div>
	<div class="field">
		<div class="control">
			<label for="email" class="label">Email address</label>
			<input type="email" id="email" name="email" class="input" placeholder="john@example.com">
			<p class="help">We will send your report to this email address</p>
		</div>
	</div>
	<div class="field">
		<div class="control">
			<label for="website" class="label">Website link</label>
			<input type="text" id="website" name="website" class="input" placeholder="e.g. www.example.com">
		</div>
	</div>
	
	<div class="field">
		<div class="control">
			<button type="submit" class="button is-primary is-medium is-block">Submit details</button>
		</div>
	</div>
</form>