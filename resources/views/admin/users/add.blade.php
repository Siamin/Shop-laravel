@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Add new User</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->




    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Register Form add user</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" data-parsley-validate="" novalidate="">
                                    <div class="form-group row">
                                        <!-- ========================Name====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Name :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="Name" required="" placeholder="Name "
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ========================Family====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Family :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="Family" required=""
                                                        placeholder="Family" class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <!-- ========================Email====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Email :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="email" required=""
                                                        data-parsley-type="email" placeholder="Email"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ========================Password====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Password :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="Password" required=""
                                                        data-parsley-type="Password" placeholder="Password"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <!-- ========================Date====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Birthday :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="date" required="" placeholder="Date"
                                                        class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                        <!-- ========================Tel====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition">
                                                    <label for="inputEmail2">phone :</label>
                                                </div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="tel" required=""
                                                        data-parsley-type="tel" placeholder="Tel" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <!-- ========================file====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">photo :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <input id="inputEmail2" type="file" required="" placeholder="file"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ========================selectBox====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">select :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <select id="inputEmail2" class="form-control">
                                                        <option><i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>Man</option>
                                                        <option><i class="fa fa-venus" aria-hidden="true"
                                                                style='font-size:24px;'></i>Woman</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <!-- ==========================radio==================================== -->
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                    for="inputEmail2">Role :</label></div>
                                            <div class="col-md-9">
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label
                                                            class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="radio-inline" checked=""
                                                                class="custom-control-input"><span
                                                                class="custom-control-label">Admin</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label
                                                            class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="radio-inline" checked=""
                                                                class="custom-control-input"><span
                                                                class="custom-control-label">user</span>
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="text-right col-md-12">
                                            <p class="btn-position">
                                                <button type="submit" name="button" value="save"
                                                    class="btn btn-space btn-warning">Save</button>
                                                <button type="submit" name="button" value="cancel"
                                                    class="btn btn-space btn-dfult cancel">Cancel</button>
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