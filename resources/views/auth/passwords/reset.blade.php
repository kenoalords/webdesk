@extends('layouts.account')

@section('content')
<div class="hero is-medium is-light">
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
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title is-5">Reset password</h3>
                            <hr>
                            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="field">
                                    <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus placeholder="Email address">

                                    @if ($errors->has('email'))
                                        <span class="help is-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="field">
                                    <input id="password" type="password {{ $errors->has('password') ? ' is-danger' : '' }}" class="input" name="password" required placeholder="New password">

                                    @if ($errors->has('password'))
                                        <span class="help is-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="field">
                                    <input id="password-confirm" type="password" class="input {{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation" required placeholder="Confirm password">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>

                                <div class="field">
                                    <button type="submit" class="button is-block is-link">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
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

