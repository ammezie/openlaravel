@extends('layouts.auth')

@section('content')
<div class="columns">
    <div class="column is-4 is-offset-4">
        @include('includes.flash')

        <h2 class="title">Reset Password</h2>

        <form method="POST" action="{{ url('/password/email') }}">
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

            <p class="control">
                <button class="button is-primary is-medium is-fullwidth">
                    <span class="icon">
                        <i class="fa fa-btn fa-envelope"></i>
                    </span>
                    <span>Send Password Reset Link</span>
                </button>
            </p>
        </form>
    </div>
</div>
@endsection
