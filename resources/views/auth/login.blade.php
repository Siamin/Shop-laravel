@extends ('auth.layouts.master')
@section('title')
<title>{{ __('ورود') }}</title>
@endsection

@section('content')
<div id="login">

    <h2 style="direction:rtl;"><span class="fontawesome-lock"></span> {{ __('ورود') }}</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <fieldset>

            <p style="direction:rtl;"><label for="email">{{ __('ایمیل') }}</label></p>
            <p><input type="email" name="email" id="email" placeholder="mail@address.com"></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <p style="direction:rtl;"><label for="password">{{ __('رمز عبور') }}</label></p>
            <p><input type="password" name="password" placeholder="password"></p>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="col-md-6 offset-md-4">
                <div style="direction:rtl;" class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('مرا به خاطر بسپار') }}
                    </label>
                </div>
            </div>
            </br>
            </br>


            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p style="direction:rtl;" class="btn-position">
                        <button type="submit" class="btn btn-space btn-warning">{{ __('ورود') }}</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                        </a>
                        @endif

                    </p>

                </div>


            </div>

        </fieldset>

    </form>


</div> <!-- end login -->
@endsection