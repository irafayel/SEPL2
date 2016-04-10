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

<!--banner-->

<!--content-->

        <!--products-->
        <div class="content-mid">
            <h3>Categories</h3>
            <label class="line"></label>
            <div class="mid-popular">

                @foreach($categories as $categories)
                    @foreach($categories->images as $images)
                        @if($images->id == $categories->id)

                            <div class="col-md-3 item-grid simpleCart_shelfItem">
                                <div class=" mid-pop">
                                    <div class="pro-img">

                                        <img src="{{ ($images->file_path) }}" class="img-responsive" alt="">

                                        <div class="zoom-icon ">
                                           <!-- <a class="picture" href="{{ ($images->file_path) }}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>-->
                                            <a href="{{ url('category/view-cat/' .$categories->id) }}"><i class="glyphicon glyphicon-menu-right icon"></i></a>
                                        </div>
                                    </div>
                                    <div class="mid-1">



                                                <div class="women">
                                                    <div class="women-top">
                                                        <span>{{ $categories->cat_name }}</span>
                                                        <h6><a href="{{ url('category/view-cat/' .$categories->id) }}">{{ $categories->cat_desc }}</a></h6>
                                                    </div>
                                                </div>
                                                    <!--<div class="img item_add">
                                                        <a href="{{ url('category/view-cat/' .$categories->id) }}"><img src="images/ca.png" alt=""></a>
                                                    </div> -->
                                                    <div class="clearfix"></div>

                                                <div class="mid-2">
                                                    <p ><label>$100.00</label><em class="item_price">$70.00</em></p>
                                                    <!--<div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>-->

                                                    <div class="clearfix"></div>
                                                </div>



                                    </div>
                                </div>
                            </div>
                                @endif
                            @endforeach
                    @endforeach

                <div class="clearfix"></div>
            </div>
        </div>

        <!--//products-->

    </div>

</div>
<!--//content-->
<!--//footer-->

@include('footer');

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