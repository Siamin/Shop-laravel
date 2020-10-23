@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Blogs</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Blogs</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>photo</th>
                                    <th>title</th>
                                    <!-- <th>description</th> -->
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Create date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                @foreach( $Blogs as $Blog)
                                <tr>
                                    <th>{{$i++}}</th>
                                    <td>
                                        <img src="/upload/image/blog/{{$Blog->Image}}"
                                            style="width: 100px;height: 100px;" alt="">
                                    </td>
                                    <td>{{$Blog->Title}}</td>
                                    <!-- <td>{{$Blog->Description}}</td> -->
                                    <td>{{$Blog->CategoryModel->name}}</td>
                                    <td>{{$Blog->Tags}}</td>
                                    <td>
                                        @if($Blog->Status=='active')
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        @else
                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        @endif
                                    </td>
                                    <td>{{$Blog->created_at}}</td>
                                    <td>
                                        <a class="btn btn-default" href="{{route('blogs.edit',[$Blog])}}"
                                            aria-label="Settings">
                                            <i class="fa fa-pencil-alt" aria-hidden="true" style='color:green'></i>
                                        </a>
                                        <a class="btn btn-default"
                                            onclick="deleterow('{{route('blogs.destroy',[$Blog])}}')"
                                            aria-label="Settings">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>

                        <div class="form-group row">
                            <div class="text-right col-md-12">
                                <a href="{{route('blogs.create')}}">
                                    <p class="btn-position">
                                        <button class="btn btn-space btn-warning">New blog</button>
                                    </p>
                                </a>
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