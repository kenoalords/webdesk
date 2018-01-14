@extends('layouts.app')

@section('content')

<div class="hero" id="slider">
    <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div>
    <!-- <figure class="image">
        <img src="{{ asset('images/hero.jpg') }}" alt="">
        <figcaption>
            <h2 class="title is-3">Now I can focus on what I do best</h2>
            <p class="subtitle">webfolly takes care of the rest</p>
            <p><a href="#" class="button is-outlined is-white">Find out how</a></p>
        </figcaption>
    </figure> -->
    <div class="container" id="slider-content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <div class="columns">
                    <div class="column is-6">
                        <h1 class="title is-1 has-text-white">
                            Let us build and manage your dream website
                        </h1>
                        <p><a href="/register" class="button is-outlined is-white"><span>Get started</span> <span class="icon"><i class="fa fa-arrow-right"></i></span></a></p>
                    </div>
                    <div class="column is-6">
                        <figure class="image">
                            <img src="{{ asset('images/imac.png') }}" alt="Webdesk work sample">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero" id="teaser">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered">
                <h1 class="title is-2" style="letter-spacing: -1px">Get a bespoke professional website to showcase your business, <span class="has-text-success">pay monthly.</span></h1>
                <!-- <h2>Best pay monthly website service in Nigeria</h2> -->
                <p>Our goal isn’t to just make great websites that your customers will love you for, but to create an experience that they will remember and ultimately drive sales.</p>
                <!-- <p>Once we achieve this, awesome websites just comes naturally.</p> -->
                <p>
                    <a href="/pricing" class="button is-outlined is-link">
                        <span>View Pricing</span>
                        <span class="icon is-small"> <i class="fa fa-arrow-right"></i></span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="has-text-centered">
    <h3 class="is-primary-wrap">
        <div class="title is-4">We've got you covered</div>
    </h3>
</div>
<div class="hero is-link is-medium" id="sl">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered is-multiline">
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/monitor.svg') }}" alt="Professional Website">
                    <h4 class="title has-text-weight-bold is-6">Professional Website</h4>
                    <p>Custom website design best to meet your business needs.</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/smartphone.svg') }}" alt="Mobile Optimization">
                    <h4 class="title has-text-weight-bold is-6">Mobile Optimized</h4>
                    <p>Our designs are mobile and tablet ready and can be viewed across all major devices</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/message.svg') }}" alt="Business Email">
                    <h4 class="title has-text-weight-bold is-6">Business Email</h4>
                    <p>Send and receive emails from any device using your customized email address</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/seo.svg') }}" alt="SEO Optimization">
                    <h4 class="title has-text-weight-bold is-6">SEO Optimization</h4>
                    <p>Send and receive emails from any device using your customized email address</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/hosting.svg') }}" alt="Secured Website Hosting">
                    <h4 class="title has-text-weight-bold is-6">Secured Hosting</h4>
                    <p>Our U.S servers are fast, reliable and highly secured. You will love them.</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/alarm-clock.svg') }}" alt="Monthly Website Maintanence">
                    <h4 class="title has-text-weight-bold is-6">Monthly Maintanence</h4>
                    <p>We are always on hand to ensure that your website runs smoothly every month.</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/analytics.svg') }}" alt="Website Google Analytics">
                    <h4 class="title has-text-weight-bold is-6">Website Analytics</h4>
                    <p>Track visits to your website with ease using Google Analytics and focus on your visitors</p>
                </div>
                <div class="column is-3 has-text-centered">
                    <img src="{{ asset('images/wordpress.svg') }}" alt="Wordpress Development">
                    <h4 class="title has-text-weight-bold is-6">WordPress CMS</h4>
                    <p>Our websites are built on WordPress Content Management System allowing unlimited changes to your website</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero is-medium">
    <div class="hero-body">
        <div class="container">
            @include('includes.pricing', ['use_title' => true])
        </div>
    </div>
</div>

@include('includes.redesign')

@include('includes.why_pay')

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