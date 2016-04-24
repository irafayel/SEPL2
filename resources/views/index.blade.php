<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Paint Pal</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--theme-style-->
    <link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <script src="js/jquery.min.js"></script>
    <!--- start-rate---->
    <script src="js/jstarbox.js"></script>
    <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
    <script type="text/javascript">
        jQuery(function() {
            jQuery('.starbox').each(function() {
                var starbox = jQuery(this);
                starbox.starbox({
                    average: starbox.attr('data-start-value'),
                    changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                    ghosting: starbox.hasClass('ghosting'),
                    autoUpdateAverage: starbox.hasClass('autoupdate'),
                    buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                    stars: starbox.attr('data-star-count') || 5
                }).bind('starbox-value-changed', function(event, value) {
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!---//End-rate---->

</head>
<body>
<!--header-->
<!--menu-->

@include('mainmenu')

<!-- end menu -->


<!--content-->
<!--<div class="content-mid">
    <label class="line"></label>
    <h3>Content</h3>

    <label class="line"></label>
</div>-->
<div class="banner">
    <div class="container">
        <section class="rw-wrapper">
            <h1 class="rw-sentence">
                <span>PaintPal </span>
                <div class="rw-words rw-words-1">
                    <span>Beautiful Paintings</span>
                    <span> Customized Requests</span>
                    <span>Reserve Images</span>

                </div>
                <div class="rw-words rw-words-2">
                    <span>Just For You</span>
                    <span>Just For You</span>
                    <span>Just For You</span>

                </div>
            </h1>
        </section>
    </div>
</div>
<!--content-->
<div class="content">
    <div class="container">
        <div class="content-top">
            <div class="col-md-6 col-md">
                <div class="col-1">
                    <a href="{{url('viewimage')}}" class="b-link-stroke b-animate-go  thickbox">
                        <img src="images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Nature</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Paintings of Nature</h3></div></a>

                    <!--<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
                </div>
                <div class="col-1">
                    <a href="{{url('viewimage')}}" class="b-link-stroke b-animate-go  thickbox">
                        <img src="images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Nature</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Paintings of Nature</h3></div></a>

                    <!--<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>-->
                </div>
                <div class="col-3">
                    <a href="single.html"><img src="images/pi2.jpg" class="img-responsive" alt="">
                        <div class="col-pic">
                            <p>Nature</p>
                            <label></label>
                            <h5>Paintings of Nature</h5>
                        </div></a>
                </div>
            </div>
            <div class="col-md-6 col-md1">
                <div class="col-3">
                    <a href="single.html"><img src="images/pi1.jpg" class="img-responsive" alt="">
                        <div class="col-pic">
                            <p>Medevial</p>
                            <label></label>
                            <h5>Paintings of Medivial era</h5>
                        </div></a>
                </div>
                <div class="col-3">
                    <a href="single.html"><img src="images/pi2.jpg" class="img-responsive" alt="">
                        <div class="col-pic">
                            <p>Sky</p>
                            <label></label>
                            <h5>Painting of night Skies</h5>
                        </div></a>
                </div>
                <div class="col-3">
                    <a href="single.html"><img src="images/pi3.jpg" class="img-responsive" alt="">
                        <div class="col-pic">
                            <p>Modern</p>
                            <label></label>
                            <h5>Paintings of moderns stuff</h5>
                        </div></a>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
        <!--products-->

        <!--//products-->
        <!--brand-->

        <!--//brand-->
    </div>

</div>

<!--//content-->


@include('footer')

<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/bootstrap.min.js"></script>
<!--light-box-files -->
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('a.picture').Chocolat();
    });
</script>


</body>
</html>
