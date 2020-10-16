@extends ('auth.layouts.master')

@section('title')
<title>{{ __('Reset Password') }}</title>
@endsection

@section('content')

<div id="login">

    <h2><span class="fontawesome-pencil"></span>{{ __('Reset Password') }}</h2>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <fieldset>

            <p><label for="password">{{ __('E-Mail Address') }}</label></p>
            <p><input id="email" type="password" name="email" value="{{ $email ?? old('email') }}" required
                    autocomplete="email" autofocus></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser"
                            class="btn btn-space btn-warning">{{ __('Send Password Reset Link') }}</button>
                    </p>
                </div>
            </div>
        </fieldset>

    </form>

</div> <!-- end login -->
@endsection