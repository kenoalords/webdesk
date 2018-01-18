@extends('layouts.app')

@section('content')

<div class="hero single-page" id="slider">
    <div class="red-back" style="top: -150px; right: 0"></div>
    <!-- <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div> -->
    
    <div class="container" id="slider-content">
        <div class="hero is-small">
            <div class="hero-body">
                <div class="columns">
                    <div class="column is-8 is-offset-2 has-text-centered ">
                        <h1 class="title is-1 is-size-2-mobile has-text-white">Choose a plan that's perfect for your business</h1>
                        <h4 class="subtitle has-text-white" style="margin-top: .5em">We offer Bespoke, feature packed and top notch support across all packages</h4>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


<div class="container">
    <div class="column is-6 is-offset-3 has-text-centered">
        <h2 class="title is-4 is-size-5-mobile">Get a feature rich website up and running for the fraction of a cost</h2>
    </div>
</div>

@include('includes.pricing')

@include('includes.redesign')

@include('includes.why_pay')

@include('includes.reviews')

@endsection