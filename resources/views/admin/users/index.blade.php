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
                                    <th>Gender</td>
                                    <th>Role</th>
                                    <th>register date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>

                                @foreach($users as $user)
                                <tr>
                                    <th>{{$i++}}</th>
                                    <td>
                                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="/upload/image/users/{{$user->photo}}" alt=""
                                                class="user-avatar-md rounded-circle">
                                        </a>
                                    </td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>
                                        @if($user->gender == 1)
                                        <i class="fas fa-male" aria-hidden="true" style='font-size:24px;'></i>
                                        @else
                                        <i class="fas fa-female" aria-hidden="true" style='font-size:24px;'>
                                            @endif

                                    </td><!-- gender -->
                                    <td>{{$user->Role->name}}</td><!-- role -->
                                    <td>{{$user->created_at}}</td><!-- date register -->
                                    <td>
                                        @if(Auth::user()->RoleEditor() && Auth::user()->id != $user->id)
                                        <a class="btn btn-default" href="{{route('Users.edit',[$user])}}"
                                            aria-label="Settings">
                                            <i class="fa fa-pencil-alt" aria-hidden="true" style='color:green'></i>
                                        </a>

                                        <a class="btn btn-default"
                                            onclick="deleterow('{{route('Users.destroy',[$user])}}')" href="#"
                                            aria-label="Settings">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>

                        <!--div class="form-group row">
                            <div class="text-right col-md-12">
                                <p class="btn-position">
                                    <button type="submit" name="button" value="newUser"
                                        class="btn btn-space btn-warning">New User</button>
                                </p>
                            </div>
                        </div-->
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