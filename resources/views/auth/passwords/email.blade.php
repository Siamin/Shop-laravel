@extends ('auth.layouts.master')

@section('title')
<title>{{ __('فراموشی رمز عبور') }}</title>
@endsection

@section('content')

<div id="login">

    <h2 style="direction:rtl;"><span class="fontawesome-pencil"></span> {{ __('فراموشی رمز عبور') }}</h2>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <fieldset>

            <p style="direction:rtl;"><label for="password">{{ __('ایمیل') }}</label></p>
            <p><input id="email" type="password" name="email" value="{{ $email ?? old('email') }}" required
                    autocomplete="email" autofocus></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="form-group row">
                <div style="direction:rtl;" class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser"
                            class="btn btn-space btn-warning">{{ __('ارسال لینک') }}</button>
                    </p>
                </div>
            </div>
        </fieldset>

    </form>

</div> <!-- end login -->
@endsection