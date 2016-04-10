<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE HTML>
<html>
<head>
    <title>Pain Pal</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <!-- webfonts -->
</head>
<body>
<!-- container -->
<!-- header -->
<!-- header -->
<!--- top-nav -->
<!--
<div class="top-nav">
    <div class="container">
        <span class="menu"> </span>
        <ul>
            <li><a href="anypage">Home<span> </span></a></li>
            <li class="active"><a href="collections">Collections<span> </span></a></li>
            <li><a href="404.html">New Arrivals<span> </span></a></li>
            <li><a href="404.html">Sale<span> </span></a></li>
            <li><a href="404.html">Accessories<span> </span></a></li>
            <li><a href="about.html">About Us<span> </span></a></li>
            <li><a href="contact.html">Contact Us<span> </span></a></li>
            <div class="clearfix"> </div>
        </ul>
    </div>
</div>
-->
@include('mainmenu')


        <!--- top-nav -->
<!-- script-for-nav -->
<script>
    $(document).ready(function(){
        $("span.menu").click(function(){
            $(".top-nav ul").slideToggle(500);
        });
    });
</script>
<!-- /script-for-nav -->
<!-- bottom-grids -->
<div class="bottom-grids collections">
    <div class="container">
        <h1>Our Collections</h1>
        <div class="col-md-9 bottom-grids-left">
            <div class="f-products">
                <h2>By Occation</h2>
                <!----sreen-gallery-cursual---->
                <div class="sreen-gallery-cursual">
                    <!-- requried-jsfiles-for owl -->
                    <link href="css/owl.carousel.css" rel="stylesheet">
                    <script src="js/owl.carousel.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#owl-demo").owlCarousel({
                                items : 3,
                                lazyLoad : true,
                                autoPlay : true,
                                navigation : true,
                                navigationText :  false,
                                pagination : false,
                            });
                        });
                    </script>
                    <!-- //requried-jsfiles-for owl -->
                    <!-- start content_slider -->

                    <div id="owl-demo" class="owl-carousel text-center">

                        @foreach($categories as $categories)


                            <div class="item">
                                <div onclick="location.href='{{ url('category/view-cat/' .$categories->id) }}';" class="product-grid">
                                    <div class="product-pic">

                                        @foreach($categories->images as $images)
                                            @if($images->id == $categories->id)
                                                <img src="{{ ($images->file_path) }}" title="{{ $categories->cat_name }}" />
                                            @endif
                                        @endforeach



                                    </div>
                                    <div class="product-pic-info">
                                        <h3><a href="#">{{ $categories->cat_name }}</a></h3>
                                        <div class="product-pic-info-price-cart">
                                            <div class="product-pic-info-price">
                                                <span>{{ $categories->cat_desc }}</span>
                                            </div>
                                            <div class="product-pic-info-cart">
                                                <!--  <a class="p-btn" href="#">Buy now</a> -->
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                                    <!--   <div class="item">
                            <div onclick="location.href='single-page.html';" class="product-grid">
                                <div class="product-pic">
                                    <img src="images/anniversary1.jpg" title="Anniversaries" />
                                </div>
                                <div class="product-pic-info">
                                    <h3><a href="#">Anniversaries</a></h3>
                                    <div class="product-pic-info-price-cart">
                                        <div class="product-pic-info-price">
                                            <span>Every Occation</span>
                                        </div>
                                        <div class="product-pic-info-cart">
                                           <!-- <a class="p-btn" href="#">Buy now</a>-->
                            <!--                </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div onclick="location.href='single-page.html';" class="product-grid">
                                    <div class="product-pic">
                                        <img src="images/ty1.jpg" title="Thank You Cards" />
                                    </div>
                                    <div class="product-pic-info">
                                        <h3><a href="#">Thanking you</a></h3>
                                        <div class="product-pic-info-price-cart">
                                            <div class="product-pic-info-price">
                                                <span>for Everything</span>
                                            </div>
                                            <div class="product-pic-info-cart">
                                                <!--<a class="p-btn" href="#">Buy now</a>-->
                            <!--                    </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div onclick="location.href='single-page.html';" class="product-grid">
                                        <div class="product-pic">
                                            <img src="images/hny1.jpg" title="New Years Cards" />
                                        </div>
                                        <div class="product-pic-info">
                                            <h3><a href="#">New Years</a></h3>
                                            <div class="product-pic-info-price-cart">
                                                <div class="product-pic-info-price">
                                                    <span>to new Beginnings</span>
                                                </div>
                                                <div class="product-pic-info-cart">
                                                  <!--  <a class="p-btn" href="#">Buy now</a> -->
                            <!--                </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div onclick="location.href='single-page.html';" class="product-grid">
                                    <div class="product-pic">
                                        <img src="images/xmas1.jpg" title="Christmas Cards" />
                                    </div>
                                    <div class="product-pic-info">
                                        <h3><a href="#">Christmas Cards</a></h3>
                                        <div class="product-pic-info-price-cart">
                                            <div class="product-pic-info-price">
                                                <span>'tis the season</span>
                                            </div>
                                            <div class="product-pic-info-cart">
                                               <!-- <a class="p-btn" href="#">Buy now</a> -->
                            <!--                </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--//sreen-gallery-cursual---->

                    </div>
                </div>



            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- bottom-grids -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-3 footer-grid">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Return</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h3>Extras</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="collections.html">Collections</a></li>
                        <li><a href="404.html">New Arrivals</a></li>
                        <li><a href="404.html">Sale</a></li>
                        <li><a href="404.html">Accessories</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid testmonial">
                    <h3>Testimonials</h3>
                    <div class="testmonial-grid">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                        <a href="#">John Smith,<span>Occupation</span></a>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="testmonial-grid">
                        <p>In reprehenderit in voluptate velit esse cillum.</p>
                        <a href="#">John Smith,<span>Occupation</span></a>
                    </div>
                </div>
                <div class="col-md-3 footer-grid about-grid">
                    <h3>About Us</h3>
                    <p>Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- social-icons -->
            <div class="social-icons text-center">
                <ul>
                    <li><a href="#"><span class="facebook"> </span></a></li>
                    <li><a href="#"><span class="twitter"> </span></a></li>
                    <li><a href="#"><span class="gpluse"> </span></a></li>
                    <li><a href="#"><span class="pin"> </span></a></li>
                    <li><a href="#"><span class="ens"> </span></a></li>
                    <li><a href="#"><span class="you"> </span></a></li>
                </ul>
            </div>
            <!-- social-icons -->
            <!-- footer-bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p>GAIA inc &#169; 2014 All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts | <a href="#">Site Map</a></p>
                </div>
                <div class="footer-bottom-right">
                    <ul>
                        <li><span class="visa"> </span></li>
                        <li><span class="master"> </span></li>
                        <li><span class="paypla"> </span></li>
                        <li><span class="ami"> </span></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!-- footer-bottom -->
            </div>
        </div>
    </div>
    <!-- footer -->
    <!-- container -->
</body>
</html>

