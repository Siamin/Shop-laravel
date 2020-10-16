@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">About Us</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->




    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">About Us</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" method="post" action="{{ route('aboutUs.update',[$ST]) }}"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group row">
                                        <!-- ========================Name====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Site Name :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" value="{{$setting['name']}}" name="name"
                                                        required="" placeholder="Site Name " class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================Email====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Email Address :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" name="email" required=""
                                                        data-parsley-type="email" value="{{$setting['email']}}"
                                                        placeholder="Email Address" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <!-- ========================Date====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Established :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="date"
                                                        value="{{$setting['established']}}" required=""
                                                        name="established" placeholder="Established"
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================Tel====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition">
                                                    <label for="inputEmail2">phone :</label>
                                                </div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" value="{{$setting['phone']}}" name="phone"
                                                        required="" data-parsley-type="tel" placeholder="Tel"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================Adress====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition">
                                                    <label for="inputEmail2">Adress :</label>
                                                </div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" value="{{$setting['adress']}}" name="adress"
                                                        required="" data-parsley-type="Adress" placeholder="Adress"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================description====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition">
                                                    <label for="inputEmail2">description websit:</label>
                                                </div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <textarea id="inputEmail2" type="tel" required="" name="description"
                                                        placeholder="description" class="form-control" rows="10"
                                                        cols="50">{{$setting['description']}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================brief description====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition">
                                                    <label for="inputEmail2">brief description :</label>
                                                </div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <textarea id="inputEmail2" type="tel" required=""
                                                        name="briefDescription" placeholder="brief description"
                                                        class="form-control" rows="3"
                                                        cols="50">{{$setting['briefDescription']}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ======================== map lat & long ====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">map :</label></div>
                                                <div class="col-5 col-md-5 col-lg-5">
                                                    <input id="inputEmail2" value="{{$setting['latitude']}}"
                                                        name="latitude" required="" placeholder="Latitude"
                                                        class="form-control">
                                                </div>
                                                <div class="col-5 col-md-5 col-lg-5">
                                                    <input id="inputEmail2" value="{{$setting['longitude']}}"
                                                        name="longitude" required="" placeholder="Longitude"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <!-- ======================== Social networks ====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Social networks :</label></div>
                                                <div class="col-2 col-md-2 col-lg-2">
                                                    <input id="inputEmail2" value="{{$setting['telegramChanel']}}"
                                                        name="telegramChanel" required="" placeholder="Telegram chanel"
                                                        class="form-control">
                                                </div>
                                                <div class="col-2 col-md-2 col-lg-2">
                                                    <input id="inputEmail2" value="{{$setting['telegramBot']}}"
                                                        name="telegramBot" required="" placeholder="Telegram bot"
                                                        class="form-control">
                                                </div>
                                                <div class="col-2 col-md-2 col-lg-2">
                                                    <input id="inputEmail2" value="{{$setting['instagram']}}"
                                                        name="instagram" required="" placeholder="Instagram"
                                                        class="form-control">
                                                </div>
                                                <div class="col-2 col-md-2 col-lg-2">
                                                    <input id="inputEmail2" value="{{$setting['linkedin']}}"
                                                        name="linkedin" required="" placeholder="Linkedin"
                                                        class="form-control">
                                                </div>
                                                <div class="col-2 col-md-2 col-lg-2">
                                                    <input id="inputEmail2" value="{{$setting['twitter']}}"
                                                        name="twitter" required="" placeholder="Twitter"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <!-- ======================== video about us ================================= -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">video :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" value="{{$setting['video']}}" name="video"
                                                        required="" placeholder="link video(aparat link) "
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <!-- ========================file====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">photo :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" name="image" type="file" required=""
                                                        placeholder="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="form-group row">
                                        <div class="text-right col-md-12">
                                            <p class="btn-position">
                                                <button type="submit" class="btn btn-space btn-warning">Save</button>
                                            </p>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection