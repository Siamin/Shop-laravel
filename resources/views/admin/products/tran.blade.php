@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Categorys</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Categorys</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>User</th>
                                    <th>Count</th>
                                    <th>Price</th>
                                    <th>date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>
                                        <img src="/img/banner/b-6.jpg" style="width: 100px;height: 100px;" alt="">
                                    </td>
                                    <td>Lenovo S510</td>
                                    <td>Amin syahi</td>
                                    <td>1</td>
                                    <td>15,000,000 تومان</td>
                                    <td>1399/07/03</td>
                                    <td>
                                        <a class="btn btn-default" href="{{url('Admin/transaction/factor')}}"
                                            aria-label="Settings">
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <th>1</th>
                                    <td>
                                        <img src="/img/banner/b-6.jpg" style="width: 100px;height: 100px;" alt="">
                                    </td>
                                    <td>Mac Book</td>
                                    <td>Reza syahi</td>
                                    <td>1</td>
                                    <td>20,000,000 تومان</td>
                                    <td>1399/07/01</td>
                                    <td>
                                        <a class="btn btn-default" href="{{url('Admin/transaction/factor')}}"
                                            aria-label="Settings">
                                            <i class="fa fa-file" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                        <!-- <div class="form-group row">
                            <div class="text-right col-md-12">
                                <p class="btn-position">
                                    <button type="submit" name="button" value="newUser"
                                        class="btn btn-space btn-warning">New blog</button>
                                </p>
                            </div>
                        </div> -->
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