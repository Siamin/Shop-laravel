@extends ('shop.layouts.master')

@section('content')


<!-- shop page area start -->
<div class="contact-page-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="shop-head contact-head">
                    <ul class="shop-head-menu ">
                        <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Map area -->
                        <div class="map-area">
                            <div id="googleMap" style="width:100%;height:410px;">

                            </div>
                        </div><!-- End Map area -->
                    </div>
                </div>
                <div class="row">
                    <!-- contact info -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-info">
                            <h3>Contact info</h3>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i> <strong>Address: </strong>
                                    {{$DataShop['adress']}}
                                </li>

                                <li>
                                    <i class="fa fa-mobile"></i> <strong>Phone: </strong>
                                    {{$DataShop['phone']}}
                                </li>

                                <li>
                                    <i class="fa fa-envelope"></i> <strong>Email: </strong>
                                    {{$DataShop['email']}}
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End contact info -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="contact-form">
                            <h3><i class="fa fa-envelope-o"></i> Leave a Message</h3>
                            <div class="row">
                                <form action="mail.php" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="name" type="text" placeholder="Name (required)" />
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input name="email" type="email" placeholder="Email (required)" />
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <input name="subject" type="text" placeholder="Subject" />
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Message"></textarea>
                                        <input type="submit" value="Submit Form" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->
<!-- Start service Area -->
<div class="service-area">

</div>
<!-- End service Area -->



@endsection