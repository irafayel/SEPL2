<div class="header">
    <div class="container">
        <div class="head">
            <div class=" logo">
                <a href="{{url ('admin')}}"><img src="{{ url ('images/logo.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="col-sm-5 col-md-offset-2  header-login">
               <ul >
                    <li><a href="login.html">Logout</a></li>
                    <!-- <li><a href="register.html">Register</a></li>
                    <li><a href="checkout.html">Checkout</a></li> -->
                </ul>
            </div>


            <div class="col-sm-5 header-social">
                <!-- <ul >
                     <li><a href="#"><i></i></a></li>
                     <li><a href="#"><i class="ic1"></i></a></li>
                     <li><a href="#"><i class="ic2"></i></a></li>
                     <li><a href="#"><i class="ic3"></i></a></li>
                     <li><a href="#"><i class="ic4"></i></a></li>
                 </ul> -->

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="container">

        <div class="head-top">

            <div class="col-sm-8 col-md-offset-2 h_menu4">
                <nav class="navbar nav_bottom" role="navigation">


                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a class="color" href="{{url ('addcat/list')}}">Categories</a></li>
                            <li><a class="color3" href="#">Customized Request</a></li>
                            <li><a class="color3" href="#">Trending</a></li>
                            <li><a class="color4" href="#">Latest</a></li>
                        </ul>
                    </div>


                </nav>
            </div>

           <!--<div class="col-sm-2 search-right">
                <ul class="heart">
                    <li>
                        <a href="wishlist.html" >
                            <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                        </a></li>
                    <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
                </ul>
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span></div>
                            <img src="{{ url ('images/cart.png') }}" alt=""/></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                </div>
                <div class="clearfix"> </div>




                <link href="{{ URL::asset('/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all"/>
                <script src="{{ URL::asset('/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>

                <div id="small-dialog" class="mfp-hide">
                    <div class="search-top">
                        <div class="login-search">
                            <input type="submit" value="">
                            <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">
                        </div>
                        <p>Shopin</p>
                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script>

            </div> -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>