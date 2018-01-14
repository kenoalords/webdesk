@extends('layouts.app')

@section('content')

<div class="hero single-page" id="slider">
    <div class="red-back" style="top: -150px; right: 0"></div>
    <!-- <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div> -->
    
    <div class="container" id="slider-content">
        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered ">
                <h1 class="title is-1 has-text-white">Choose a plan that's perfect for your business</h1>
                <h4 class="subtitle has-text-white" style="margin-top: .5em">We offer Bespoke, feature packed and top notch support across all packages</h4>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="column is-6 is-offset-3 has-text-centered">
        <h2 class="title is-4">Get a feature rich website up and running for the fraction of a cost</h2>
    </div>
</div>

@include('includes.pricing')

@include('includes.redesign')

@include('includes.why_pay')

<div class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds has-text-centered">
                    <h2 class="title is-4 pointing-header"><i class="fa fa-comments"></i> What our customers say</h2>
                    <div class="testimonials">
                        <div>
                            <p>I created my business around 6 months ago with very little capital but needed a website to help market. I was actually recommended Cloud Web Solutions and from day 1 I've had the most amazing experience. Not only was my website designed to a high standard, I pay a monthly direct debit that has helped in my first year. I also know after 2 years, I can rebrand and keep my costs. Jack has been fantastic, and would recommend all businesses to use this fantastic service. I will also add, all my queries and requests are always dealt with very quickly and extremely professionally.</p>
                            <h4 class="title is-4 text-is-uppercase">Kolawole Olarewaju</h4> 
                            <h5 class="subtitle">Founder, Komotion Studio</h5>                   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="hero is-light">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-two-thirds">
                <h2 class="title is-4">Got Questions? These might help.</h2>
                <dl>
                    <dt></dt>
                    <dd></dd>
                </dl>
            </div>
        </div>
    </div>
</div> -->

@endsection