@extends ('auth.layouts.master')
@section('title')
<title>Sign In</title>
@endsection

@section('content')
<div id="login">

    <h2><span class="fontawesome-lock"></span>Sign In</h2>

    <form action="#" method="POST">

        <fieldset>

            <p><label for="email">E-mail address</label></p>
            <p><input type="email" id="email" placeholder="mail@address.com"></p>

            <p><label for="password">Password</label></p>
            <p><input type="password" id="password" placeholder="password"></p>

            </br>
            </br>

            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser" class="btn btn-space btn-warning">Sign
                            In</button>
                    </p>
                </div>
            </div>

        </fieldset>

    </form>

</div> <!-- end login -->
@endsection