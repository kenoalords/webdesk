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
                <h1 class="title is-1 has-text-white">We are webdesk.ng</h1>
                <h4 class="subtitle has-text-white" style="margin-top: .5em">We offer Bespoke, feature packed and top notch website services.</h4>
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

<div class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-two-thirds has-text-centered">
                    <h2 class="title is-4 pointing-header"><i class="fa fa-comments"></i> What our customers say</h2>
                    <div class="testimonials">
                        <div>
                            <p>I find the developers at Webdesk.ng very professional and committed to delivering quality service to their customers.  Their attention to detail and understanding of what the client needs a refreshing change to my past experience with website developers.  I would definitely recommend Webdesk.ng to my friends</p>
                            <h4 class="title is-4 text-is-uppercase">Kolawole Olarewaju</h4> 
                            <h5 class="subtitle">Founder, Komotion Studios</h5>                   
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