<!-- Start Footer top Area -->
<footer class="footer-area">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-top-text">
                        <div class="footer-top-menu">
                            <h4>{{ __('ارتباط با ما') }}</h4>
                        </div>
                        <ul style="direction:rtl;">
                            <li><i class="fa fa-map-marker"></i>{{$DataShop['adress']}} :آدرس</li>
                            <li><i class="fa fa-phone"></i>{{$DataShop['phone']}} :تلفن</li>
                            <li><i class="fa fa-envelope-o"></i>{{$DataShop['email']}} :ایمیل</li>
                        </ul>

                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-top-menu">
                        <!--h4>customer care</h4>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">SiteMap</a></li>
                            <li><a href="#">Term & Conditions</a></li>
                            <li><a href="#">Gift & Vourchers</a></li>
                        </ul-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                    <div class="footer-top-menu">
                        <!--h4>service center</h4>
                        <ul>
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-top-text" style="direction:rtl;">
                        <img src="/upload/image/Shop/{{$DataShop['image']}}" alt="">
                        <p>{{$DataShop['briefDescription']}}</p>
                        <div class="footer-icons">
                            @if($DataShop['telegramChanel'] != 'none')
                            <a href="http://telegram.me/{{$DataShop['telegramChanel']}}" data-toggle="tooltip"
                                data-placement="top" title="Telegram"><i class="fa fa-paper-plane"></i></a>
                            @endif
                            @if($DataShop['twitter'] != 'none')
                            <a href="https://twitter.com/intent/tweet?screen_name={{$DataShop['twitter']}}"
                                data-toggle="tooltip" data-placement="top" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                            @endif
                            @if($DataShop['telegramBot'] != 'none')
                            <a href="http://telegram.me/{{$DataShop['telegramBot']}}" data-toggle="tooltip"
                                data-placement="top" title="Telegram Bot"><i class="fa fa-paper-plane"></i></a>
                            @endif
                            @if($DataShop['instagram'] != 'none')
                            <a href="http://www.instagram.com/{{$DataShop['instagram']}}" data-toggle="tooltip"
                                data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a>
                            @endif
                            @if($DataShop['linkedin'] != 'none')
                            <a href="https: //in.linkedin.com/in/{{$DataShop['linkedin']}}" data-toggle="tooltip"
                                data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer top Area -->
    <!-- Start Footer middle Area -->
    <div class="footer-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="footer-middle-menu">
                        <nav>
                            <!--ul>
                                <li><a href="#">contact us</a></li>
                                <li><a href="#">sitemap</a></li>
                                <li><a href="#">terms & condition</a></li>
                                <li><a href="#">privacy policy</a></li>
                            </ul-->
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="payment-system">
                        <a href="#">
                            <img src="img/footer/payment.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer middle Area -->
    <!-- Start Footer bottom Area -->
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p>Copyright © 2020 <a href="#"> EmSo laptop</a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer bottom area -->

<!-- quickview product -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <!-- Start product images -->
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/quick-1.jpg">
                            </div>
                        </div>
                        <!-- end product images -->
                        <div class="product-info">
                            <h1>Adobe Photoshop Tuts</h1>
                            <div class="price-box-3">
                                <div class="s-price-box">
                                    <span class="new-price">$17.20</span>
                                </div>
                            </div>
                            <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec
                                    est tristique auctor. Donec non est at libero.Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.</p>
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#"
                                                class="pinterest social-icon"><i class="fa fa-pinterest"></i></a>
                                        </li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i
                                                    class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i
                                                    class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal-body -->
            </div>
            <!-- modal-content -->
        </div>
    </div>
    <!-- END Modal -->
</div>
<!-- END quickview product -->



<!-- all js here -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jquery-ui.min js -->
<script src="js/jquery-ui.min.js"></script>
<!-- meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- countdown js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- Simple Lence JS -->
<script src="js/jquery.simpleGallery.min.js"></script>
<script src="js/jquery.simpleLens.min.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<!-- Nivo slider js -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
function initialize() {
    var lat = "{{$DataShop['latitude']}}",
        long = "{{$DataShop['longitude']}}";

    var mapOptions = {
        zoom: 18,
        scrollwheel: false,
        center: new google.maps.LatLng(lat, long)
    };

    var map = new google.maps.Map(document.getElementById('googleMap'),
        mapOptions);


    var marker = new google.maps.Marker({
        position: map.getCenter(),
        animation: google.maps.Animation.BOUNCE,
        icon: 'img/logo/map-marker.png',
        map: map
    });

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

</body>

</html>