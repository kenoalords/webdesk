@extends('layouts.account')

@section('content')
<form class="signup-form" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}

<!-- EXTRA ADDONS -->
<div class="hero">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <a href="/">
                    <img src="{{ asset('images/logo-inverse.png') }}" alt="{{ config('app.name') }}" style="width: 140px; height: auto; margin-bottom: 2em;">
                </a>
                <h2 class="title">Setup your account</h2>
                @include('dashboard.composers.packages')

                <h3 class="title is-5" style="margin-top: 2em">Domain Name</h3>
                <p>Please enter a domain name you would like us to register, if you already own this domain check the box below. If this is a new domain, <a href="https://www.godaddy.com/domains/domain-name-search" target="_blank">click here to check its availability</a></p>
                <div class="field">
                    <input type="url" name="domain" class="input is-large {{ ($errors->has('domain')) ? 'is-danger' : '' }}" value="{{ old('domain') }}" placeholder="e.g www.mydomain.com">
                    @if($errors->has('domain'))
                        <span class="help is-danger">{{ $errors->first('domain') }}</span>
                    @endif
                </div>
                <label class="checkbox">
                    <input type="checkbox" name="has_domain" value="1" {{ (old('has_domain') == "1") ? 'checked' : '' }}>
                    I have registered this domain
                </label>

                <h3 class="title is-5" style="margin-top: 2em">Logo Design + <span class="naira">{{ number_format(config('builder.logo_cost')) }}</span></h3>
                <label class="checkbox">
                    <input type="checkbox" name="include_logo" id="include_logo" data-cost="{{ config('builder.logo_cost') }}" value="1" {{ (old('include_logo') == "1") ? 'checked' : '' }}> Yes I want a new logo
                </label>

                <h3 class="title is-5" style="margin-top: 2em">How often do you want to renew this package</h3>
                <div class="control">
                    <div class="select is-medium ">
                        <select name="renew_interval" id="renew_interval" style="width: 100%">
                            <option value="1" {{ (old('renew_interval') == 1) ? 'selected' : '' }} >Monthly</option>
                            <option value="6" {{ (old('renew_interval') == 6) ? 'selected' : '' }}>Every Six Months</option>
                            <option value="12" {{ (old('renew_interval') == 12) ? 'selected' : '' }}>Yearly</option>
                        </select>
                    </div>
                </div>
                <p class="help">Choose your billing cycle</p>

                <div class="field">
                    <div class="control">
                        <h3 class="title is-5" style="margin-top: 2em">Tell us briefly about this website.</h3>
                        <textarea name="notes" id="notes" class="textarea" placeholder="You can also include links of reference website you like">{{ old('notes') }}</textarea>
                    </div>
                </div>

                <div class="notification is-primary is-large" id="total-wrapper">
                    <h3 class="title">Total: <span class="total-amount">0</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- USER INFO SECTION -->
<div class="hero is-light">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-offset-3 is-6">
                <h3 class="title is-5">Personal Details</h3>
                <!-- <div class="field">
                    <input type="text" class="input is-medium {{ $errors->has('username') ? ' is-error' : '' }}" name="username" value="{{ old('username') }}" required placeholder="Username">
                </div> -->
                <div class="field">
                    <input type="text" class="input is-medium {{ $errors->has('fullname') ? ' is-error' : '' }}" name="fullname" value="{{ old('fullname') }}" required placeholder="Fullname">
                    @if ($errors->has('fullname'))
                        <span class="help is-danger">{{ $errors->first('fullname') }}</span>
                    @endif
                </div>
                <!-- <div class="field">
                    <input type="text" class="input is-medium {{ $errors->has('last_name') ? ' is-error' : '' }}" name="last_name" value="{{ old('last_name') }}" required placeholder="Last Name">
                </div> -->

                <div class="field">
                    <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-error' : '' }} is-medium" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                    @if ($errors->has('email'))
                        <span class="help is-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="field">
                    <input id="password" type="password" class="input {{ $errors->has('password') ? ' has-error' : '' }} is-medium" name="password" required placeholder="Password" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="help is-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="field">
                    <input id="password-confirm" type="password" class="input is-medium" name="password_confirmation" required placeholder="Confirm Password">
                </div>

                <h3 class="title is-5" style="margin-top: 3em">Contact Details</h3>
                <div class="field">
                    <input type="text" class="input {{ $errors->has('city') ? ' is-error' : '' }} is-medium" name="city" required placeholder="City" value="{{ old('city') }}">
                    @if ($errors->has('city'))
                        <span class="help is-danger">{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="field">
                    <input type="text" class="input {{ $errors->has('city') ? ' is-error' : '' }} is-medium" name="state" required placeholder="State" value="{{ old('state') }}">
                    @if ($errors->has('state'))
                        <span class="help is-danger">{{ $errors->first('state') }}</span>
                    @endif
                </div>
                <div class="field">
                    <input type="text" class="input {{ $errors->has('city') ? ' is-error' : '' }} is-medium" name="phone_number" required placeholder="Phone Number" value="{{ old('phone_number') }}">
                    @if ($errors->has('phone_number'))
                        <span class="help is-danger">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hero">
    <div class="hero-body">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                @include('includes.terms')
                <button type="submit" class="button is-link is-large has-text-weight-bold is-block">
                    Sign me up @ <span class="total-amount">0</span>
                </button>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
