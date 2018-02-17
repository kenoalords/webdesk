@extends('layouts.app')

@section('title', 'Get a professional free website audit')

@section('content')

<div class="hero is-medium" id="slider">
    <div class="hero-body" id="slider-content">
        <div class="columns">
            <div class="column is-8 is-offset-2">
            	<div class="columns">
            		<div class="column">
            			<h1 class="title is-1 has-text-white">Get a FREE website audit in 24hrs</h1>
                		<h4 class="subtitle has-text-white" style="margin-top: .5em">Request for your free website audit today. Limited slots available</h4>
            		</div>
            		<div class="column">
            			<figure>
            				<img src="{{ asset('images/analytics-desktop.svg') }}" alt="Website analysis" class="image is-centered" style="width: 320px; height: auto;">
            			</figure>
            			
            		</div>
            	</div>
                
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="column is-8 is-offset-2">
    		<p>Our free website audit report gives you professional insight into how your website performs relative to website best practices.</p>
    		<p>Gain proper insight on how your website performs in areas such as SEO (Search Engine Optimization), Page Speed Test, UI/UX Design, Conversion Rate and Lead Generation</p>

    		<div class="hero">
    			<div class="hero-body" style="padding-left: 0; padding-right: 0;">
    				<h3 class="title has-text-centered is-3">Request your free audit report today</h3>
    				<p class="subtitle is-6 has-text-centered">Fill the form below to have your website audited for free.</p>
    				<div class="card">
    					<div class="card-content">
    						@include('includes.audit-form')	
    					</div>
    				</div>
    			</div>
    		</div>
    </div>
</div>

@include('includes.social')

@endsection