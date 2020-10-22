@extends ('auth.layouts.master')

@section('title')
<title>ثبت نام</title>
@endsection

@section('content')
<div id="login">

    <h2 style="direction:rtl;"><span class="fontawesome-pencil"> </span>{{ __('ثبت نام') }}</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <fieldset>

            <p style="direction:rtl;"><label for="firstname">{{ __('نام') }}</label></p>
            <p style="direction:rtl;"><input type="text" name="name" value="{{ old('name') }}"></p>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <p style="direction:rtl;"><label for="lastname">{{ __('نام خانوادگی') }}</label></p>
            <p style="direction:rtl;"><input type="text" name="lastname" value="{{ old('lastname') }}"></p>
            @error('lastname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <p style="direction:rtl;"><label for="gender">{{ __('جنسیت') }}</label></p>
            <p>
                <select name="gender" class="form-control">
                    <option value="0"><i class="fa fa-mars" aria-hidden="true" style='font-size:24px;'></i>زن</option>

                    <option value="1"><i class="fa fa-mars" aria-hidden="true" style='font-size:24px;'></i>مرد
                    </option>

                </select>
            </p>
            @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <p style="direction:rtl;"><label for="lastname">{{ __('ایمیل') }}</label></p>
            <p><input type="email" name="email" value="{{ old('email') }}"></p>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <p style="direction:rtl;"><label for="email">{{ __('رمز عبور') }}</label></p>
            <p><input type="password" name="password" required autocomplete="new-password"></p>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <p style="direction:rtl;"><label for="password">{{ __('تکرار رمز عبور') }}</label></p>
            <p><input type="password" name="password_confirmation" required autocomplete="new-password" /></p>

            </br>

            <div class="form-group row">
                <div style="direction:rtl;" class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser"
                            class="btn btn-space btn-warning">{{ __('ثبت نام') }}</button>
                    </p>
                </div>
            </div>

        </fieldset>

    </form>

</div> <!-- end login -->
@endsection