@extends ('auth.layouts.master')

@section('title')
<title>Sign Up</title>
@endsection

@section('content')
<div id="login">

    <h2><span class="fontawesome-pencil"></span>{{ __('Register') }}</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <fieldset>

            <p><label for="firstname">{{ __('Name') }}</label></p>
            <p><input type="text" name="name" value="{{ old('name') }}"></p>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <p><label for="lastname">{{ __('E-Mail Address') }}</label></p>
            <p><input type="email" name="email" value="{{ old('email') }}"></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <p><label for="email">{{ __('Password') }}</label></p>
            <p><input type="password" name="password" required autocomplete="new-password"></p>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <p><label for="password">{{ __('Confirm Password') }}</label></p>
            <p><input type="password" name="password_confirmation" required autocomplete="new-password" /></p>

            </br>

            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser"
                            class="btn btn-space btn-warning">{{ __('Register') }}</button>
                    </p>
                </div>
            </div>

        </fieldset>

    </form>

</div> <!-- end login -->
@endsection