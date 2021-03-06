@extends('layouts.dashboard')

@section('content')

<div class="hero">
	<div class="hero-body">
		<h2 class="is-3 title"><span class="icon"><i class="fa fa-question-circle"></i></span> FAQ</h2>

		@if($faqs->count())
			@each('faq.includes.faq', $faqs, 'faq')
		@endif
	</div>
</div>

@endsection