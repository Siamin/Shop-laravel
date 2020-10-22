@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit select User</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->


    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit Form user select</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" method="post" action="">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}

                                    <div class=" form-group row">
                                        <!-- ========================Name====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Name :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <a>{{$user->name}}</a>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- ========================Family====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Family :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <a>{{$user->lastname}}</a>
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
                                                    <a>{{$user->email}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ========================selectBox====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label
                                                        for="inputEmail2">Gender :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <a>@if($user->gender==1)Man @else Woman @endif</a>
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
                                                    <a>{{$user->birthday}}</a>
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
                                                    <a>{{$user->phone}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <!-- ========================file====================================== -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-2 col-md-2 col-lg-2 labelPosition"><label>Role
                                                        :</label></div>
                                                <div class="col-10 col-md-10 col-lg-10">
                                                    <select name="role" class="form-control">
                                                        @foreach($roles as $role)
                                                        <option value="{{$role->id}}" @if($role->id==$user->roleId)
                                                            selected="selected" @endif><i class="fa fa-mars"
                                                                aria-hidden="true"
                                                                style='font-size:24px;'></i>{{$role->name}}
                                                        </option>
                                                        @endforeach
                                                    </select>
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