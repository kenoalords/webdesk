@extends('layouts.app')
@section('title', 'Professional website designers in Lagos | ')
@section('description', 'Own a professional website for as low as ₦3,500/Monthly. You also get SEO Optimization, Graphics design and Online marketing solutions. Sign up today')

@section('content')

<div class="hero" id="slider">
    <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div>
    
    <div class="container" id="slider-content">
        <div class="hero is-small has-text-centered-mobile">
            <div class="hero-body">
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        <div class="columns">
                            <div class="column is-6">
                                <h1 class="title is-1 has-text-white is-size-3-mobile">
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
    </div>
</div>

<div class="hero" id="teaser">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-8 is-offset-2 has-text-centered">
                <h1 class="title is-3 is-size-4-mobile" style="letter-spacing: -1px">Get a professional website to showcase your business and services, <span class="has-text-success">pay monthly.</span></h1>
                <p>Our goal isn’t to just make great websites that your customers will love you for, but to create an experience that they will remember and ultimately drive sales.</p>
                <p>
                    <a href="/pricing?utm_source=landing_page&utm_medium=pricing_link_click&utm_campaign=landing_page_optimization" class="button is-outlined is-link">
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

<div class="hero">
    <div class="hero-body">
        <div class="container">
            @include('includes.pricing', ['use_title' => true])
        </div>
    </div>
</div>

@include('includes.redesign')

@include('includes.why_pay')

@include('includes.works')

@include('includes.reviews')

<div class="hero is-light">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-half">
                <h2 class="title is-3"><span class="icon"><i class="fa fa-question-circle"></i></span> FAQ</h2>
                @include('includes.faqs')
            </div>
        </div>
    </div>
</div>


@endsection