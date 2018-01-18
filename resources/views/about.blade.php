@extends('layouts.app')

@section('content')

<div class="hero single-page" id="slider">
    <div class="red-back" style="top: -150px; right: 0"></div>
    <!-- <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div> -->
    
    <div class="container" id="slider-content">
        <div class="columns">
            <div class="column is-6 is-offset-3 has-text-centered ">
                <h1 class="title is-1 has-text-white">We are webdesk.ng</h1>
                <h4 class="subtitle has-text-white" style="margin-top: .5em">We offer Bespoke, feature packed and top notch website design and management services.</h4>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="column is-6 is-offset-3">
        <p>
            We are a small team of professional, highly experienced developers with a passion for quality design and the best coding standards. Our aim is to work with you to not just make a website that looks great, but focuses on increasing your business potential and driving sales with measurable results.
        </p>
        <p>We work hard with our clients to find the best tools and methods to communicate to understand your business. Our process is collaborative and as straight forward for you as possible.
        </p>

        <p>See for yourself! Take a look at our diverse portfolio, we are proud of the work we do, and we know that you will love your new website too.
        </p>
    </div>
</div>
<div class="container">
    <h3 class="title is-4 has-text-centered" style="margin-bottom: 1em;">Some of our works</h3>
</div>
@include('includes.works')

@include('includes.reviews')

@endsection