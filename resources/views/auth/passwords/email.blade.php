@extends('layouts.account')

@section('content')
<div class="hero is-medium">
    <div class="hero-body">
        <div class="columns is-centered">
            <div class="column is-one-quarter">
                <h3 class="title is-5 has-text-centered">Reset Password</h3>
                @include('includes.notification')
                <div class="card">
                    <div class="card-content">
                        <form method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="field{{ $errors->has('email') ? ' is-error' : '' }}">
                                <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required placeholder="Email Address">

                                @if ($errors->has('email'))
                                    <span class="help is-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="field">
                                <button type="submit" class="button is-link is-block">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="has-text-centered" style="margin-top: 2em">
                    <a href="/login" class="has-text-grey"><span class="icon"><i class="fa fa-arrow-left"></i></span> Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
