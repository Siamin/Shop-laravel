@extends ('shop.layouts.master')

@section('content')

<!--Start Page Header -->
<div class="page-content">


    <!--Start About head  -->
    <div class="our-about-head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-head about-head">
                        <ul class="shop-head-menu">
                            <li><i class="fa fa-home"></i><a class="home" href="#"><span>Home</span></a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                    <!-- shop head end -->
                </div>
                <div class="our-about-inner">
                    <div class="col-lg-6 col-md-6">
                        <div class="school-info">
                            <p>{{$DataShop['description']}}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-pic">
                            <img src="img/about/1.png" alt="our image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End About head area -->


    <!--Start Full Width Video area -->
    <div class="full-width-video-area area-padding-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="video-inner text-center">
                        <h2 class="section-title">Our Features</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="89757752">
                        <script type="text/JavaScript" src="{{$DataShop['video']}}">
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Full Width Video area -->


    <!-- Start Testimonials-v2 Area -->
    <div class="testimonial-area area-margin">
        <div class="testimonial-container sys-indicator">
            <!-- Start Single Testimonial -->
            <div class="single-testimonial text-center">
                <div class="client-pic">
                    <img class="img-circle" src="img/about/ab1.jpg" alt="" />
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Cramsuada lobortis semper. Vestibulum <br />
                    sagittis,felis in accumsans is a faubus, orci leo cursus felis, nec mattis.</p>
                <p class="client-name">Alex</p>
                <p class="review-date">2 days ago on <a href="#">Twitter.com</a></p>
            </div>
            <!-- End Single Testimonial -->
            <!-- Start Single Testimonial -->
            <div class="single-testimonial text-center">
                <div class="client-pic">
                    <img class="img-circle" src="img/about/ab2.jpg" alt="" />
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Cramsuada lobortis semper. Vestibulum <br />
                    sagittis,felis in accumsans is a faubus, orci leo cursus felis, nec mattis.</p>
                <p class="client-name">Jania</p>
                <p class="review-date">3 days ago on <a href="#">Twitter.com</a></p>
            </div>
            <!-- End Single Testimonial -->
            <!-- Start Single Testimonial -->
            <div class="single-testimonial text-center">
                <div class="client-pic">
                    <img class="img-circle" src="img/about/ab3.jpg" alt="" />
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Cramsuada lobortis semper. Vestibulum <br />
                    sagittis,felis in accumsans is a faubus, orci leo cursus felis, nec mattis.</p>
                <p class="client-name">Lasy</p>
                <p class="review-date">5 days ago on <a href="#">Twitter.com</a></p>
            </div>
            <!-- End Single Testimonial -->
        </div>
    </div>
    <!-- End Testimonials-v2  -->




    <!-- Start Out Team  V-3 -->
    <div class="our-team-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-headding text-center">
                        <h2 class="section-title">Meet Our Teachers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius consequat magna,
                            id<br> molestie ipsum volutpat quis. Suspendisse consectetur fringilla suctus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="member-container clear">

                        <!-- Single Member -->
                        <div class="single-member">
                            <div class="mb-image">
                                <img src="img/about/team1.jpg" alt="">
                            </div>
                            <div class="team-content text-center">
                                <div class="mb-info">
                                    <h5 class="product-name"><a href="#">Sohyla sarlak</a></h5>
                                    <h5>Ceo</h5>
                                </div>
                                <div class="footer-icons teams-icons">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tumblr"><i
                                            class="fa fa-tumblr"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Member -->


                        <!-- Single Member -->
                        <div class="single-member">
                            <div class="mb-image">
                                <img src="img/about/team2.jpg" alt="">
                            </div>
                            <div class="team-content text-center">
                                <div class="mb-info">
                                    <h5 class="product-name"><a href="#">Emad SarLak</a></h5>
                                    <h5>Principal</h5>
                                </div>
                                <div class="footer-icons teams-icons">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tumblr"><i
                                            class="fa fa-tumblr"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Member -->


                        <!-- /Single Member -->
                        <div class="single-member">
                            <div class="mb-image">
                                <img src="img/about/team5.jpg" alt="">
                            </div>
                            <div class="team-content text-center">
                                <div class="mb-info">
                                    <h5 class="product-name"><a href="#">Anjelia Roy</a></h5>
                                    <h5>Developer</h5>
                                </div>
                                <div class="footer-icons teams-icons">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tumblr"><i
                                            class="fa fa-tumblr"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Member -->


                        <!-- Single Member -->
                        <div class="single-member">
                            <div class="mb-image">
                                <img src="img/about/team3.jpg" alt="">
                            </div>
                            <div class="team-content text-center">
                                <div class="mb-info">
                                    <h5 class="product-name"><a href="#">Amin Syahi</a></h5>
                                    <h5>Web Design</h5>
                                </div>
                                <div class="footer-icons teams-icons">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                                            class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                            class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Tumblr"><i
                                            class="fa fa-tumblr"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- /Single Member -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Out Team  V-3 -->


</div>



<!-- Start service  -->
<div class="service-area">

</div>
<!-- End service  -->
@endsection