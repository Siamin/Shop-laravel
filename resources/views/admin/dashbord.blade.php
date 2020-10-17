@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pagehader  -->
    <!-- ============================================================== -->
    <!-- revenue  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">تراکنش ها</h5>
                <div class="card-body">
                    <canvas id="revenue" width="400" height="150"></canvas>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 p-3">
                            <h4> Today's Earning: $2,800.30</h4>
                            <p>Suspendisse potenti. Done csit amet rutrum.
                            </p>
                        </div>
                        <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                            <h2 class="font-weight-normal mb-3"><span>$48,325</span> </h2>
                            <div class="mb-0 mt-3 legend-item">
                                <span class="fa-xs text-primary mr-1 legend-title "><i
                                        class="fa fa-fw fa-square-full"></i></span>
                                <span class="legend-text">Current Week</span>
                            </div>
                        </div>
                        <div class="offset-xl-1 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3">
                            <h2 class="font-weight-normal mb-3">

                                <span>$59,567</span>
                            </h2>
                            <div class="text-muted mb-0 mt-3 legend-item"> <span
                                    class="fa-xs text-secondary mr-1 legend-title"><i
                                        class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Previous
                                    Week</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end reveune  -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- total sale  -->
        <!-- ============================================================== -->
        <div class="col-xl-4 col-lg-12 col-md-4 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">کاربرها</h5>
                <div class="card-body">
                    <canvas id="total-sale" width="220" height="155"></canvas>
                    <div class="chart-widget-list">
                        <p>
                            <span class="fa-xs text-primary mr-1 legend-title"><i
                                    class="fa fa-fw fa-square-full"></i></span><span class="legend-text">
                                برنامه نویس</span>
                            <span class="float-right">1</span>
                        </p>
                        <p>
                            <span class="fa-xs text-secondary mr-1 legend-title"><i
                                    class="fa fa-fw fa-square-full"></i></span>
                            <span class="legend-text">مدیر</span>
                            <span class="float-right">3</span>
                        </p>
                        <p>
                            <span class="fa-xs text-brand mr-1 legend-title"><i
                                    class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">کاربر</span>
                            <span class="float-right">5000</span>
                        </p>
                        <!--p class="mb-0">
                            <span class="fa-xs text-info mr-1 legend-title"><i
                                    class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">
                                E-mail</span>
                            <span class="float-right">$154.02</span>
                        </p-->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <!-- ============================================================== -->
        <!-- revenue locations  -->
        <!-- ============================================================== -->
        <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Revenue by Location</h5>
                <div class="card-body">
                    <div id="locationmap" style="width:100%; height:200px"></div>
                </div>
                <div class="card-body border-top">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="sell-ratio">
                                <h5 class="mb-1 mt-0 font-weight-normal">Tehran</h5>
                                <div class="progress-w-percent">
                                    <span class="progress-value">85k </span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 85%;"
                                            aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="sell-ratio">
                                <h5 class="mb-1 mt-0 font-weight-normal">Ilam</h5>
                                <div class="progress-w-percent">
                                    <span class="progress-value">39k</span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 39%;"
                                            aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="sell-ratio">
                                <h5 class="mb-1 mt-0 font-weight-normal">Shiraz</h5>
                                <div class="progress-w-percent">
                                    <span class="progress-value">25k </span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 39%;"
                                            aria-valuenow="39" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="sell-ratio">
                                <h5 class="mb-1 mt-0 font-weight-normal">Mashhad</h5>
                                <div class="progress-w-percent mb-0">
                                    <span class="progress-value">61k </span>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 61%;"
                                            aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection