@extends ('auth.layouts.master')

@section('title')
<title>Sign Up</title>
@endsection

@section('content')
<div id="login">

    <h2><span class="fontawesome-pencil"></span>Sign up</h2>

    <form action="#" method="POST">

        <fieldset>

            <p><label for="firstname">First name</label></p>
            <p><input type="email" name="firstName" placeholder="First name"></p>

            <p><label for="lastname">Last name</label></p>
            <p><input type="email" name="LastName" placeholder="Last name"></p>

            <p><label for="email">E-mail address</label></p>
            <p><input type="email" placeholder="mail@address.com"></p>

            <p><label for="password">Password</label></p>
            <p><input type="password" name="password" placeholder="Password" /></p>

            <p><label for="password">Retype password</label></p>
            <p><input type="password" name="password2" placeholder="Retype password" /></p>

            </br>

            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser" class="btn btn-space btn-warning">Sign
                            Up</button>
                    </p>
                </div>
            </div>

        </fieldset>

    </form>

</div> <!-- end login -->
@endsection