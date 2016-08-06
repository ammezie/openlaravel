@extends('layouts.auth')

@section('content')
<div class="columns">
    <div class="column is-4 is-offset-4">
    
        <h2 class="title">Login</h2>

        <form method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <label class="label">
                E-Mail Address
            </label>

            <p class="control">
                <input
                    type="email"
                    class="input {{ $errors->has('email') ? 'is-dangerr' : '' }}"
                    name="email"
                    value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help is-danger">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </p>

            <label class="label">
                Password
            </label>

            <p class="control">
                <input
                    type="password"
                    class="input {{ $errors->has('password') ? 'is-dangerr' : '' }}"
                    name="password"
                    value="{{ old('password') }}">

                @if ($errors->has('password'))
                    <span class="help is-danger">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </p>

            <p class="control">
                <label class="checkbox">
                    <input type="checkbox" name="remember">
                    Remember Me
                </label>
            </p>

            <p class="control">
                <button class="button is-primary is-medium">
                    <span class="icon">
                        <i class="fa fa-sign-in"></i>
                    </span>
                    <span>Login</span>
                </button>

                <a class="button is-medium is-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
            </p>
        </form>
    </div>
</div>
@endsection
