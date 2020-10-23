@extends ('admin.layouts.master')
@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Products</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- ============================================================== -->
        <!-- basic table  -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">All Products</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>title</th>
                                    <th>count</th>
                                    <th>price</th>
                                    <th>category</th>
                                    <th>Create date</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>


                                <?php $i = 1;?>
                                @foreach( $products as $product)
                                <tr>
                                    <th>{{$i++}}</th>

                                    <td>
                                        <img src="/upload/image/product/{{$product->image}}"
                                            style="width: 100px;height: 100px;" alt="">
                                    </td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->count}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->CategoryModel->name}}</td>
                                    <td>{{$product->created_at}}</td>
                                    <td>
                                        <a class="btn btn-default" href="{{route('product.edit',[$product])}}"
                                            aria-label="Settings">
                                            <i class="fa fa-cog" aria-hidden="true" style='color:yellow'></i>
                                        </a>
                                        <a class="btn btn-default" href="{{route('product.edit',[$product])}}"
                                            aria-label="Settings">
                                            <i class="fa fa-pencil-alt" aria-hidden="true" style='color:green'></i>
                                        </a>
                                        <a class="btn btn-default"
                                            onclick="deleterow('{{route('product.destroy',[$product])}}')" href="#"
                                            aria-label="Settings">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>

                        <div class="form-group row">
                            <div class="text-left col-md-12">
                                <a href="{{route('product.create')}}">
                                    <p class="btn-position">
                                        <button type="submit" class="btn btn-space btn-warning">New blog</button>
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