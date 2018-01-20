@extends('layouts.account')

@section('title', 'Login | ')
@section('description', 'Log into your account and manage your subscription')

@section('content')
<div class="hero is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-one-third">
                    <div class="has-text-centered" style="margin-bottom: 2em;">
                        <a href="/login">
                            <img src="{{ asset('images/logo-inverse.png') }}" alt="Webdesk.ng" style="width: 120px; height: auto;">
                        </a>
                    </div>
                    @include('includes.notification')
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="card is-raised">
                            <div class="card-content">
                                <div class="field">
                                    <!-- <label for="email" class="label">E-Mail Address</label> -->
                                    <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }} is-medium" name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">

                                    @if ($errors->has('email'))
                                        <span class="help is-danger">{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>

                                <div class="field">
                                    <!-- <label for="password" class="label">Password</label> -->
                                    <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-danger' : '' }} is-medium" name="password" required placeholder="Password">

                                    @if ($errors->has('password'))
                                        <span class="help is-danger">{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="control">
                                        <button type="submit" class="button is-link is-medium is-block">
                                            Login
                                        </button>
                                    </div>
                                </div>
                                <div class="field has-text-center">
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div>
                        <div class="field is-grouped is-centered is-grouped-centered padded">
                            <p class="control">
                                <a href="/" class="has-link">Home</a>
                            </p>
                            
                            <a href="/register" class="control">Register</a>
                            <a href="#" class="control">Need Help?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
