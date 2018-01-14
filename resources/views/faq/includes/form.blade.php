<div class="card">
	<div class="card-content">
		<form action="{{ route('faq_admin') }}" method="post">
			{{ csrf_field() }}
			<div class="field">
				<div class="control">
					<input type="text" class="input" name="title" placeholder="Title">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<textarea name="description" class="textarea" placeholder="Description"></textarea>
				</div>
			</div>
			<div class="field">
				<div class="control">
					<input type="number" class="input" name="weight" placeholder="Weight">
				</div>
			</div>
			<div class="field">
				<div class="control">
					<button type="submit" class="is-block button is-link">
						Submit
					</button>
				</div>
			</div>
		</form>
	</div>
</div>