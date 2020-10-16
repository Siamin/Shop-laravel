@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Users</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Users</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>photo</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Age</th>
                                    <th>Gender</td>
                                    <th>Role</th>
                                    <th>Start create</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>
                                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/img/about/ab1.jpg" alt="" class="user-avatar-md rounded-circle">
                                        </a>
                                    </td>
                                    <td>amin</td>
                                    <td>Syahi</td>
                                    <td>29</td>
                                    <td><i class="fa fa-mars" aria-hidden="true" style='font-size:24px;'></i>
                                    </td>
                                    <td>Admin</td>
                                    <td>1399/07/03</td>
                                    <td>
                                        <a class="btn btn-default" href="{{url('Admin/Users/edit')}}"
                                            aria-label="Settings">
                                            <i class="fa fa-pencil-alt" aria-hidden="true" style='color:green'></i>
                                        </a>
                                        <a class="btn btn-default" onclick="deleterow('{{url('/Admin/Users/edit')}}')"
                                            href="#" aria-label="Settings">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <th>2</th>
                                    <td>
                                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                                src="/img/about/ab2.jpg" alt=""
                                                class="user-avatar-md rounded-circle"></a>
                                    </td>
                                    <td>yasamin</td>
                                    <td>omidi</td>
                                    <td>25</td>
                                    <td><i class="fa fa-venus" aria-hidden="true" style='font-size:24px;'></i>
                                    </td>
                                    <td>Admin</td>
                                    <td>1399/07/04</td>
                                    <td>
                                        <a class="btn btn-default" href="{{url('Admin/Users/edit')}}"
                                            aria-label="Settings">
                                            <i class="fa fa-pencil-alt" aria-hidden="true" style='color:green'></i>
                                        </a>
                                        <a class="btn btn-default" onclick="deleterow('{{url('/Admin/Users/edit')}}')"
                                            href="#" aria-label="Settings">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                        <div class="form-group row">
                            <div class="text-right col-md-12">
                                <p class="btn-position">
                                    <button type="submit" name="button" value="newUser"
                                        class="btn btn-space btn-warning">New User</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic table  -->
        <!-- ============================================================== -->
    </div>

</div>
@endsection