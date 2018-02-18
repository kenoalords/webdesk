@extends('layouts.app')

@section('description', 'Own a professional website for as low as ₦4,999/Monthly. You also get SEO Optimization, Graphics design and Online marketing solutions. Sign up today')

@section('content')

<div class="hero is-medium is-home" id="slider">
    <!-- <div class="red-back"></div> -->
    <!-- <div class="grey-back"></div> -->
    <!-- <div class="blue-back"></div> -->
    <div class="hero-body" style="padding-bottom: 2em">
        <div class="columns is-centered">
            <div class="column is-8 has-text-centered">
                <h1 class="title is-1 has-text-white is-size-4-mobile is-size-2-tablet">
                    We build and manage Professional Websites for Businesses
                </h1>
                <figure class="image">
                    <img src="{{ asset('images/imac.png') }}" alt="Webdesk work sample">
                </figure>
                <p>
                    <a href="/pricing?utm_source=landing_page&utm_medium=pricing_link_click&utm_campaign=landing_page_optimization" class="button is-raised is-success is-long-button">
                        <span>View Pricing</span>
                        <span class="icon is-small"> <i class="fa fa-arrow-right"></i></span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="hero is-success is-bold" style="">
    <div class="hero-body is-paddingless">
        <div class="columns is-marginless">
            <div class="column is-6 is-paddingless" style="line-height: 0; background: url({{ asset('images/professional-worker.jpg') }}) no-repeat center; background-size: cover ">
                <img src="{{ asset('images/professional-worker.jpg') }}" alt="Get a professional website to showcase your business and services" style="visibility: hidden;">
            </div>
            <div class="column is-6 is-content-middle is-block-content">
                <div class="">
                    <h1 class="title is-2 is-size-4-mobile" style="letter-spacing: -1px">Owning a website never felt this easy.</h1>
                    <p>Now i can focus on my business and let Webdesk manage my online presence.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero" id="sl">
    <div class="hero-body">
        <h3 class="title is-2 has-text-centered">What you get!</h3>
        <hr style="opacity: .2">
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

@include('includes.consultation')

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

@include('includes.why_pay')

@endsection