<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EmSo Shop</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

    <!-- google fonts here -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,400italic,500,600,700' rel='stylesheet'
        type='text/css'>

    <!-- all css here -->

    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="lib/css/style.css" type="text/css" media="screen" />
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- simpleLens css -->
    <link rel="stylesheet" href="css/jquery.simpleGallery.css">
    <link rel="stylesheet" href="css/jquery.simpleLens.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>


    <!-- Header-area start -->
    <header>
        <div class="header-area">


            <!-- header-top start -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7 hidden-xs">
                            <div class="top-header-menu left-menu">
                                <ul>
                                    @guest
                                    <li><a href="{{url('/SignIn')}}">{{ __('ورود') }}</a></li>
                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>
                                    </li>
                                    @endif
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>


                                        <div class="dropdown-menu dropdown-menu-left">
                                            @if(\Auth::user()->checkRole())
                                            <a style="color:#F15B22;" href="{{url('/Admin/dashbord')}}">پنل مدیریت</a>
                                            @else
                                            <a style="color:#F15B22;" href="{{url('/')}}">پنل کاربری</a>
                                            @endif
                                            <a style="color:#F15B22;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('خروج از حساب کاربری') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- header-top end -->


            <!-- header-middle start -->
            <div class="header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="logo logo-2">
                                <a href="{{url('/')}}"><img src="/upload/image/Shop/{{$DataShop['image']}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <!-- cart item start -->
                            <div class="cart-item cart-2">
                                <div class="cart-item-title">
                                    <a class="cart-top" href="#"><i class="fa fa-shopping-cart"></i>
                                        <span class="total-cart">cart:-2 items</span>
                                    </a>
                                    <div class="cart-content-2">
                                        <div class="product-items-cart">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/cart/1.png" alt="" /></a>
                                            </div>
                                            <div class="cart-text-2">
                                                <a class="btn-remove" title="Remove This Item" href="#"><span
                                                        class="pencil"><i class="fa fa-pencil"></i></span><i
                                                        class="fa fa-times"></i></a>
                                                <p class="product-name"><a href="#">Coffy Box</a></p>
                                                <p><strong>1</strong> x<span class="price">$100.00</span> </p>
                                            </div>
                                        </div>
                                        <div class="product-items-cart">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/cart/2.png" alt="" /></a>
                                            </div>
                                            <div class="cart-text-2">
                                                <a class="btn-remove" title="Remove This Item" href="#"><span
                                                        class="pencil"><i class="fa fa-pencil"></i></span><i
                                                        class="fa fa-times"></i></a>
                                                <p class="product-name"><a href="#">Ladis Fasion</a></p>
                                                <p><strong>1</strong> x<span class="price">$105.00</span> </p>
                                            </div>
                                        </div>
                                        <div class="top-subtotal">Subtotal: <span class="price">$205.00</span></div>
                                        <div class="cart-btn-3">
                                            <a class="button" href="{{url('/')}}">view cart</a>
                                            <a class="button check-btn" href="{{url('/CheckOut')}}">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- cart item end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <form action="#">
                                    <div class="search-option search-option-2">
                                        <input type="text" placeholder="...جستجو">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                                <!-- search option end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top End -->


            <!-- header-bottom start -->
            <div class="header-bottom hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <!-- main-menu start -->
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">{{ __('صفحه اصلی') }}</a></li>

                                        <li><a href="{{url('/ProductList')}}">{{ __('محصولات') }}</a>

                                            <!-- mega menu start -->
                                            <div class="mega-menu">
                                                @foreach($menus as $menu)
                                                <span>
                                                    <a class="mega-headline" href="#">{{$menu->name}}</a>
                                                    @if($menu->getChild->count()>0)

                                                    @foreach($menu->getChild as $child)
                                                    <a href="{{url('/ProductList')}}">{{$child->name}}</a>
                                                    @endforeach

                                                    @endif
                                                </span>
                                                @endforeach
                                                <span class="mega-img">
                                                    <img style="width: 100px;height: 100px;"
                                                        src="/upload/image/category/{{$menu->image}}">
                                                </span>

                                            </div>
                                            <!-- mega menu end -->
                                        </li>

                                        <li><a href="{{route('ShopBlog.index')}}">{{ __('بلاگ ها') }}</a></li>

                                        <li><a href="{{url('/ContactUs')}}">{{ __('ارتباط با ما') }}</a></li>

                                        <li><a href="{{url('/AboutUs')}}">{{ __('در باره ما') }}</a></li>

                                    </ul>
                                </nav>
                            </div>
                            <!-- main-menu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom end -->


        </div>

    </header>
    <!-- header area end  -->