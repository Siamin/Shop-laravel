@extends ('auth.layouts.master')

@section('title')
<title>Forgot Password</title>
@endsection

@section('content')
<div id="login">

    <h2><span class="fontawesome-envelope"></span>Forgot Password</h2>

    <form action="#" method="POST">

        <fieldset>

            <p><label for="email">E-mail address</label></p>
            <p><input type="email" id="email" placeholder="mail@address.com"></p>

            <div class="form-group row">
                <div class="text-right col-md-4">
                    <p class="btn-position">
                        <button type="submit" name="button" value="newUser"
                            class="btn btn-space btn-warning">Send</button>
                    </p>
                </div>
            </div>

        </fieldset>

    </form>

</div> <!-- end login -->

@endsection