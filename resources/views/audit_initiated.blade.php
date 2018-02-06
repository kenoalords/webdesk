@extends('layouts.app')

@section('title', 'Get a professional free website audit')

@section('content')

<div class="hero is-dark" id="slider">
    <!-- <div class="red-back" style="top: -150px; right: 0"></div> -->
    <!-- <div class="red-back"></div>
    <div class="grey-back"></div>
    <div class="blue-back"></div> -->
    <div class="hero-body">
        <div class="container" id="slider-content">
            <div class="columns">
                <div class="column is-8 is-offset-2">
                    <div class="columns">
                        <div class="column">
                            <figure>
                                <img src="{{ asset('images/clipboard.svg') }}" alt="Website analysis" class="image is-centered" style="width: 240px; height: auto;">
                            </figure>
                        </div>
                        <div class="column">
                            @if(Request::get('status') == 'old')
                                <h1 class="title is-3">You have already requested a free audit for {{ Request::get('url') }}</h1>
                                <p class="subtitle is-5" style="margin-top: .5em">You can only make one request per email address.</p>
                                <p>
                                    <a href="/" class="button is-primary is-raised">
                                        <span class="icon"><i class="fa fa-arrow-left"></i></span>
                                        <span>Go back home</span>
                                    </a>
                                </p>
                            @elseif(Request::get('status') == 'new')
                                <h1 class="title is-3">Thank you for requesting a free website audit for {{ Request::get('url') }}</h1>
                                <p class="subtitle is-5" style="margin-top: .5em">Your report will be emailed to you once completed</p>
                                <p>
                                    <a href="/" class="button is-primary is-raised">
                                        <span class="icon"><i class="fa fa-arrow-left"></i></span>
                                        <span>Go back home</span>
                                    </a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.social')

@endsection