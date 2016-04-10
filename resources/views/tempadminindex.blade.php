<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Paint Pal</title>
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
@include('adminmenu')
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
<!-- banner -->
<div class="banner">
    <div class="container">
        <!--- img-slider --->
        <div class="img-slider">
            <!----start-slider-script---->
            <script src="js/responsiveslides.min.js"></script>
            <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider4").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: true,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                            $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                            $('.events').append("<li>after event fired.</li>");
                        }
                    });

                });
            </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->
            <div  id="top" class="callbacks_container">
                <ul class="rslides" id="slider4">
                    <li>
                        <img class="img-responsive" src="images/slide1.jpg" alt="">
                        <div class="slider-caption">
                            <h1>Beautiful & durable</h1>
                            <p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
                        </div>
                    </li>
                    <li>
                        <img src="images/slide1.jpg" alt="">
                        <div class="slider-caption">
                            <h1>Beautiful & durable</h1>
                            <p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
                        </div>
                    </li>
                    <li>
                        <img src="images/slide1.jpg" alt="">
                        <div class="slider-caption">
                            <h1>Beautiful & durable</h1>
                            <p>Classically simple and beautifully elegant Hard wearing leather shoes and hand-made with heart </p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- slider -->
    </div>
</div>
<!-- banner -->
<!-- top-grids -->
<div class="top-grids">
    <div class="container">
        <div class="col-md-4 top-grid text-center">
            <div class="top-grid-pic">
                <img src="images/pic01.png" title="Boots" />
                <span>Boots</span>
            </div>
            <div class="top-grid-pic-info">
                <a href="single-page.html">Seeall</a>
            </div>
        </div>
        <div class="col-md-4 top-grid text-center">
            <div class="top-grid-pic">
                <img src="images/pic02.png" title="Boots" />
                <span>Casual</span>
            </div>
            <div class="top-grid-pic-info">
                <a href="single-page.html">Seeall</a>
            </div>
        </div>
        <div class="col-md-4 top-grid text-center">
            <div class="top-grid-pic">
                <img src="images/pic03.png" title="Boots" />
                <span>Formal</span>
            </div>
            <div class="top-grid-pic-info">
                <a href="single-page.html">Seeall</a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- top-grids -->
<!-- bottom-grids -->

<!-- //requried-jsfiles-for owl -->
<!-- start content_slider -->

<!-- bottom-grids -->



<!-- container -->
</body>
</html>

