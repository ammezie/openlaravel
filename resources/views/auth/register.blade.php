@extends('layouts.auth')

@section('content')
<div class="columns">
    <div class="column is-4 is-offset-4">

        <h2 class="title">Register</h2>

        <form method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <label class="label">
                Name
            </label>

            <p class="control">
                <input
                    type="text"
                    class="input {{ $errors->has('name') ? 'is-dangerr' : '' }}"
                    name="name"
                    value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help is-danger">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </p>

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

            <label class="label">
                Password
            </label>

            <p class="control">
                <input
                    type="password"
                    class="input {{ $errors->has('password_confirmation') ? 'is-dangerr' : '' }}"
                    name="password_confirmation"
                    value="{{ old('password_confirmation') }}">

                @if ($errors->has('password_confirmation'))
                    <span class="help is-danger">
                        {{ $errors->first('password_confirmation') }}
                    </span>
                @endif
            </p>

            <p class="control">
                <button class="button is-primary is-fullwidth">
                    <span class="icon">
                        <i class="fa fa-btn fa-user"></i>
                    </span>
                    <span>Register</span>
                </button>
            </p>
        </form>
    </div>
</div>
@endsection
