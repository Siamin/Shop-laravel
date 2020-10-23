@extends ('admin.layouts.master')
@section('content')

<div class="col-xl-12 order-xl-1">
    <div class="card card-profile">
        <img src="/assets/img/theme/headerProfile1.jpg" alt="Image placeholder" class="card-img-top">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a>
                        <img id="imgProfile" onclick="getFile()" src="/upload/image/users/{{Auth::user()->photo}}"
                            class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">

            <h6 class="heading-small text-muted mb-4">User information</h6>
            <div class="pl-lg-4">

                <form action="{{route('profile.update',[Auth::user()])}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div style='height: 0px;width: 0px; overflow:hidden;'><input onchange="loadFile(event)" name="photo"
                            type="file" id="upfile" /></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">First
                                    name</label>
                                <input type="text" name="name" class="form-control" placeholder="First name"
                                    value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-last-name">Last
                                    name</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Last name"
                                    value="{{Auth::user()->lastname}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="phone number"
                                    value="{{Auth::user()->phone}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email
                                    address</label>
                                <input disabled type="email" name="email" class="form-control"
                                    placeholder="{{Auth::user()->email}}">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">gender</label>
                                <select id="inputEmail2" name="gender" class="form-control">
                                    <option value="0" @if(Auth::user()->gender=='0' ) selected="selected" @endif><i
                                            class="fa fa-mars" aria-hidden="true" style='font-size:24px;'></i>Woman
                                    </option>

                                    <option value="1" @if(Auth::user()->gender=='1' ) selected="selected" @endif><i
                                            class="fa fa-mars" aria-hidden="true" style='font-size:24px;'></i>Man
                                    </option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">
                                    birthday</label>
                                <input name="birthday" type="date" value="{{Auth::user()->birthday}}" name="established"
                                    placeholder="Birthdate" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input name="address" class="form-control" placeholder="Home Address"
                                    value="{{Auth::user()->address}}" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="text-right col-md-12">
                            <p class="btn-position">
                                <button type="submit" class="btn btn-space btn-warning">update</button>
                            </p>
                        </div>
                    </div>

                </form>
            </div>

            <hr class="my-4" />
            <h6 class="heading-small text-muted mb-4">Change password</h6>
            <div class="pl-lg-4">
                <form action="{{route('profile.update',[Auth::user()])}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">password</label>
                                <input type="password" required name="password" id="input-city" class="form-control"
                                    placeholder="password">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">New Password</label>
                                <input type="password" required name="newpassword" id="input-country"
                                    class="form-control" placeholder="New Password">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">confirm Password</label>
                                <input type="password" required name="confirmpassword" id="input-postal-code"
                                    class="form-control" placeholder="confirm Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="text-right col-md-12">
                            <p class="btn-position">
                                <button type="submit" class="btn btn-space btn-warning">Change Password</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            <hr class="my-4" />
            <!-- <h6 class="heading-small text-muted mb-4">Team information</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Address</label>
                                <input id="input-address" class="form-control" placeholder="Home Address"
                                    value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">City</label>
                                <input type="text" id="input-city" class="form-control" placeholder="City"
                                    value="New York">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Country</label>
                                <input type="text" id="input-country" class="form-control" placeholder="Country"
                                    value="United States">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Postal
                                    code</label>
                                <input type="number" id="input-postal-code" class="form-control"
                                    placeholder="Postal code">
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" /> -->


        </div>
    </div>
</div>
@endsection