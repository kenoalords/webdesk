@extends('layouts.app')

@section('title', 'What we do | ')
@section('description', 'We are a team of professional website designers and digital media consultants.')

@section('content')

<div class="hero is-medium is-home is-header is-info is-pricing">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-2 is-size-4-mobile has-text-white">What we do.</h1>
            <p>We offer Bespoke, feature packed and top notch website design and management services.</p>
        </div>
    </div>
</div>

<div class="hero">
    <div class="hero-body">
        <div class="container">
            <div class="">
                <h2 class="title is-3">It starts with you.</h2>
                <p>With over 20.35 billion devices connected to the internet globally as at December 2017, the web is treasure pool of potential customers and clients for every type of business and service.</p>
                <p>To help you tap into this huge Revenue stream comprising of billions of customers across the globe, we design solutions that are tailored to promote the core values of your business and increase sales.</p>
                <blockquote>
                    Whether you need a Business Website, a Blog or an Ecommerce store, we have the expertise to make you dreams a reality.
                </blockquote>
                <h2 class="title is-4">How we work.</h2>
                <p>We don't just build a website for your business and leave you hanging high and dry, we work closely with you to ensure that our solutions are a perfect fit for your business and one that leads to more sales and revenues.</p>
            </div>
        </div>
    </div>
</div>

<div class="hero is-green is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <figure class="image">
                        <img src="{{ asset('images/webdesign.svg') }}" alt="Website Design">
                    </figure>
                </div>
                <div class="column is-8">
                    <h3 class="title is-3">Website Design and Management</h3>
                    <p>Our web design solutions are absolute, meaning we take care of everything from your Domain Name purchase to Website Hosting, Design and Deployment.</p>
                    <p>We analyze your needs specifically to identify areas that can increase your ROI using your new website and adopt best practices to meet those needs.</p>
                    <p>
                        <a href="/pricing" class="button is-white is-long-button is-medium">View our plans</a>
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
                <div class="column">
                    <figure class="image">
                        <img src="{{ asset('images/logo-design.svg') }}" alt="Logo Design">
                    </figure>
                </div>
                <div class="column is-8">
                    <h3 class="title is-3">Logo Design and Corporate Branding</h3>
                    <p>How your brand looks can greatly impact on your overall performance as a business. We understand how important it is and make great commitment in crafting the perfect brand image for your business.</p>
                    <p>We handle all your corporate design needs including printing without having you leave your seat. These include <strong>Business Cards, Brochures, Flyers, Corporate Gift Items</strong> and much more.</p>
                    <p><a href="/contact" class="button is-danger is-medium is-long-button">Contact us today</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero is-medium is-danger">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <figure class="image">
                        <img src="{{ asset('images/social-media-marketing.svg') }}" alt="Social Media Marketing">
                    </figure>
                </div>
                <div class="column is-8">
                    <h3 class="title is-3">Social Media Marketing</h3>
                    <p>Having an amazing product or service isnt enough, everyone needs to know how your products or services can greatly improve their lives and ultimately, improve your ROI.</p>
                    <p>Our team of social media marketers deploy some of the best strategies to increase brand awareness with immediate impact on your revenue.</p>
                    <p>We don't just deploy our digital marketing strategies on social media, we utilize the best social media platform to communicate to your potential customers. Working this way will help us save you a lot of money by avoiding platform that yield little to no results</p>
                    <p><a href="/contact" class="button is-warning is-medium is-long-button">Contact us today</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.reviews')

@endsection