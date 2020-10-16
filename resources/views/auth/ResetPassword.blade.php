@extends ('auth.layouts.master')

@section('title')
<title>Forgot Password</title>
@endsection

@section('content')

<div id="login">

    <h2><span class="fontawesome-pencil"></span>Reset Password</h2>

    <form action="" method="POST">

        <fieldset>

            <p><label for="password">New Password</label></p>
            <p><input type="password" id="password" placeholder="password"></p>

            <p><label for="password">Confirm Password</label></p>
            <p><input type="password" id="ConfirmPassword" placeholder="Confirm password"></p>


            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser" class="btn btn-space btn-warning">Change
                            Password</button>
                    </p>
                </div>
            </div>
        </fieldset>

    </form>

</div> <!-- end login -->
@endsection