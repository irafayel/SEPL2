<div class="header">
    <div class="container">
        <div class="head">
            <div class=" logo">
                <a href="{{url ('/')}}"><img src="{{ url ('images/logo.png') }}" alt=""></a>
            </div>
        </div>
    </div>
    <div class="header-top">
        <div class="container">
            <div class="col-sm-5 col-md-offset-2  header-login">
                <ul >
                    <li><a href="{{url('login')}}">Login</a></li>
                    <li><a href="{{url('register')}}">Register</a></li>

                </ul>
            </div>


            <div class="col-sm-5 header-social">
                <ul >
                    <li><a href="#"><i></i></a></li>
                    <li><a href="#"><i class="ic1"></i></a></li>
                    <li><a href="#"><i class="ic2"></i></a></li>
                    <li><a href="#"><i class="ic3"></i></a></li>
                    <li><a href="#"><i class="ic4"></i></a></li>
                </ul>

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
                            <li><a class="color" href="{{url('categories')}}">Categories</a></li>
                            <li><a class="color3" href="{{url('custom_cat')}}">Customized Request</a></li>
                            <li><a class="color3" href="#">Trending</a></li>
                            <li><a class="color4" href="#">Latest</a></li>
                            <li><a class="color5" href="#">About Us</a></li>
                            <li ><a class="color6" href="#">Contact Us</a></li>
                        </ul>
                    </div>


                </nav>
            </div>

            <div class="col-sm-2 search-right">

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

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>