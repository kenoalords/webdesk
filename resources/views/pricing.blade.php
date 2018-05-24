@extends('layouts.app')
@section('title', 'Website Design Pricing | ')
@section('description', 'Own a professional website for as low as ₦4,999/Monthly. You also get SEO Optimization, Graphics design and Online marketing solutions. Sign up today')

@section('content')

<div class="hero is-medium is-home is-danger is-header">    
    <div class="hero-body">
        <div class="container">
            <div class="">
                <h1 class="title is-2 is-size-4-mobile has-text-white">Choose a plan that's perfect for your business</h1>
                <h4 class="subtitle has-text-white is-size-6-mobile" style="margin-top: .5em">We offer Bespoke, feature packed and top notch support across all packages</h4>
            </div>
        </div>
    </div>
</div>


<!-- <div class="container">
    <div class="column is-6 is-offset-3 has-text-centered">
        <h2 class="title is-4 is-size-5-mobile">Get a feature rich website up and running for the fraction of a cost</h2>
    </div>
</div> -->

@include('includes.pricing')

@include('includes.redesign')

@include('includes.reviews')

@endsection