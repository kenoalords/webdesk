@extends('layouts.dashboard_form')

@section('content')

<h2 class="title is-3"><span class="icon"><i class="fa fa-question-circle"></i></span> FAQ</h2>
@include('includes.notification')
@include('faq.includes.form')

@if($faqs->count())
	@each('faq.includes.faq', $faqs, 'faq')
@endif


@endsection