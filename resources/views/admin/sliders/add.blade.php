@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Add New Slider</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->




    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Add New Slider</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" method="post" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <!-- ========================title====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Title :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <input id="inputEmail2" name="title" required=""
                                                        placeholder="Title " class="form-control">
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================Description====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Description :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">

                                                    <textarea id="inputEmail2" name="description" required=""
                                                        placeholder="Description" class="form-control" rows="10"
                                                        cols="30"></textarea>
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

                                        <!-- ========================category====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Status :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <select id="inputEmail2" name="status" class="form-control">
                                                        <option value="active"><i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>Active</option>

                                                        <option value="deactive"><i class="fa fa-mars"
                                                                aria-hidden="true" style='font-size:24px;'></i>Deactive
                                                        </option>

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