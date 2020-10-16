@extends ('auth.layouts.master')
@section('title')
<title>{{ __('Login') }}</title>
@endsection

@section('content')
<div id="login">

    <h2><span class="fontawesome-lock"></span>{{ __('Login') }}</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <fieldset>

            <p><label for="email">{{ __('E-Mail Address') }}</label></p>
            <p><input type="email" name="email" id="email" placeholder="mail@address.com"></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <p><label for="password">{{ __('Password') }}</label></p>
            <p><input type="password" name="password" placeholder="password"></p>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </br>
            </br>
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif

            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" class="btn btn-space btn-warning">{{ __('Login') }}</button>
                    </p>
                </div>


            </div>

        </fieldset>

    </form>


</div> <!-- end login -->
@endsection