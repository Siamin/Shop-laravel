@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit select blog</h2>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->




    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Edit Form blog select</h5>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="form" method="post" action="{{route('blogs.update',[$Blog])}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    {{method_field('PUT')}}
                                    <div class="form-group row">
                                        <!-- ========================title====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Title :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <input id="inputEmail2" name="Title" value="{{$Blog->Title}}"
                                                        required="" placeholder="Title " class="form-control">
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

                                                    <textarea id="inputEmail2" name="Description" required=""
                                                        placeholder="Description" class="form-control" rows="10"
                                                        cols="30">{{$Blog->Description}}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <!-- ========================category====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Category :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <select id="inputEmail2" name="CategorId" class="form-control">
                                                        <option value="0"><i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>None</option>
                                                        @foreach($categorys as $key=>$value)
                                                        <option value="{{$key}}" @if($key==$Blog->CategorId)
                                                            selected="selected" @endif><i class="fa fa-mars"
                                                                aria-hidden="true"
                                                                style='font-size:24px;'></i>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <!-- ========================Tags====================================== -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-3 col-md-3 col-lg-3 labelPosition"><label
                                                        for="inputEmail2">Tags :</label></div>
                                                <div class="col-9 col-md-9 col-lg-9">
                                                    <input id="inputEmail2" name="Tags" value="{{$Blog->Tags}}"
                                                        required="" placeholder="Tags" class="form-control">
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
                                                    <input id="inputEmail2" type="file" name="Image" required=""
                                                        placeholder="Image" class="form-control">
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
                                                    <select id="inputEmail2" name="Status" class="form-control">
                                                        <option @if($Blog->Status=='active') selcted="selcted" @endif
                                                            value="active" >
                                                            <i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>Active
                                                        </option>

                                                        <option @if($Blog->Status=='deactive')selcted="selcted" @endif
                                                            value="deactive">
                                                            <i class="fa fa-mars" aria-hidden="true"
                                                                style='font-size:24px;'></i>Deactive
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