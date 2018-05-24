@extends('layouts.app')

@section('description', 'Own a professional website for as low as ₦4,999/Monthly. You also get SEO Optimization, Graphics design and Online marketing solutions. Sign up today')

@section('content')

<div class="hero is-fullheight is-green" id="slider">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-10">
                    <h1 class="title is-1 has-text-white is-size-4-mobile is-size-2-tablet">
                        Grow your business with a professional website that convert visitors to customers
                    </h1>
                    <p class="has-text-white">
                        We make it <em><strong class="has-text-white"><u>extremely</u></strong></em> easy to own a professional website by doing the heavy lifting while you focus on growing your business.
                    </p>
                    <p>
                        <a href="/about?utm_source=landing_page&utm_medium=pricing_link_click&utm_campaign=landing_page_optimization" class="button is-danger is-medium is-long-button">
                            <span>Learn more</span>
                            <span class="icon is-small"> <i class="fa fa-arrow-right"></i></span>
                        </a>
                        <a href="/pricing/?utm_source=landing_page&utm_medium=pricing_link_click&utm_campaign=landing_page_optimization" class="button is-white is-long-button is-medium is-outlined">
                            <span>View our plans</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-9">
                    <h2 class="title is-3 block-title">Focus on business growth not website management.</h2>
                    <p>We are very passionate about helping business thrive in this modern era, this is why our main goal is to abstract and handle your online needs, giving you more time to focus on your business.</p>
                    <p>The benefits of having a website cannot be over-emphasized. However, maintaning your website in this fast changing world can be a challenge, this is where we come in.</p>
                    <h3 class="title is-5">We build, manage and scale your website while you sleep.</h3>
                    <p>Sounds easy right? Its cheaper than you think</p>
                    <p>
                        <a href="/pricing" class="button is-medium is-long-button is-danger">View our plans</a>
                    </p>
                </div>
                <div class="column is-3">
                    <figure class="image">
                        <img src="{{ asset('images/space-shuttle.svg') }}" alt="Website Design">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero is-light is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <figure class="image">
                        <img src="{{ asset('images/revenue.svg') }}" alt="Increase your revenue when you signup">
                    </figure>
                </div>
                <div class="column is-9">
                    <h2 class="title is-3 block-title">Save up to 94% monthly on website running cost when you hire us.</h2>
                    <p>Most businesses hire a webmaster to maintain and update their website on a daily or weekly basis. This is entirely fine for most business owners who can afford it.</p>
                    <p>However, if you will like to save <u class="has-text-weight-bold">94%</u> of that money and still enjoy the benefits of an in-house webmaster without the overheads, we are here for you.</p>
                    <p>
                        <a href="/pricing" class="button is-medium is-long-button is-danger">View our plans</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero is-medium" id="benefits">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-8">
                    <h2 class="title is-3 block-title">Enjoy these amazing benefits and much more.</h2>
                    <p>When you sign up for any of our website design packages, you enjoy all the benefits of partnering with a Web Agency that's focused on growth using modern methodology to achieve success.</p>
                    <p>All our Website design packages come standard with the following features to help you achieve more within the shortest time possible.</p>

                    @include('includes.features-list')
                    <p>
                        <a href="/pricing" class="button is-medium is-long-button is-danger">Sign up today</a>
                    </p>
                </div>
                <div class="column">
                    <figure class="image">
                        <img src="{{ asset('images/benefits.svg') }}" alt="Benefits of signing up">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

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
