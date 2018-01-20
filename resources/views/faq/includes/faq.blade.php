<div class="card faq" style="margin-top: 1em;" id="faq-{{ $faq->id }}">
	<div class="card-header">
		<h4 class="card-header-title">{{ $faq->title }}</h4>
		<a href="#" class="card-header-icon" aria-label="more options">
			<span class="icon">
				<i class="fa fa-angle-down" aria-hidden="true"></i>
			</span>
		</a>
	</div>
	<div class="card-content">
		<div class="content">
			<p>{{ $faq->description }}</p>
		</div>
	</div>
</div>