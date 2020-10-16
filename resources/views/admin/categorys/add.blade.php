@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Add New Category</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->




    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add New Category</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" method="post" action="{{ route('categorys.store') }}"
                                    enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <!-- ========================title====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Name :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <input id="inputEmail2" value="{{old('name')}}" name="name"
                                                        required="" placeholder="Name " class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>



                                    <div class="form-group row">

                                        <!-- ========================category====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Parent :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <select id="inputEmail2" name="parentId" class="form-control">
                                                        <option value="0"><i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>None</option>
                                                        @foreach($category as $key=>$value)
                                                        <option value="{{$key}}"><i class="fa fa-mars"
                                                                aria-hidden="true"
                                                                style='font-size:24px;'></i>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================file====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Image :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <input id="inputEmail2" type="file" name="image" required=""
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