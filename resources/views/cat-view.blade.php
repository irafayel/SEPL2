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
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Shopin Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndroId Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--theme-style-->
    <link href="{{ URL::asset('/css/style4.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
    <!--- start-rate---->
    <script src="{{ URL::asset('/js/jstarbox.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" />
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
    <h3>{{ $category->cat_name }}</h3>
    <label class="line"></label>

    <p>{{$category->cat_desc}}</p>

    <div class="mid-popular">


            @foreach($category->images as $images)

                    <div class="col-md-3 item-grid simpleCart_shelfItem">
                        <div class=" mid-pop">
                            <div class="pro-img">
                                <img src="{{ URL::asset($images->file_path) }}" class="img-responsive" alt="">
                                <div class="zoom-icon ">
                                    <a class="picture" href="{{ URL::asset($images->file_path) }}" rel="title" class="b-link-stripe b-animate-go  thickbox"><i class="glyphicon glyphicon-search icon "></i></a>
                                    <!--<a href="#"><i class="glyphicon glyphicon-menu-right icon"></i></a>-->
                                </div>
                            </div>
                            <div class="mid-1">



                                <div class="women">
                                    <div class="women-top">
                                        <span>{{ $category->cat_name }}</span>

                                    </div>
                                </div>
                                <!--<div class="img item_add">
                                            <a href="{{ url('category/view-cat/' .$category->id) }}"><img src="images/ca.png" alt=""></a>
                                        </div> -->
                                <div class="clearfix"></div>

                                <div class="mid-2">
                                    <p ><label>$100.00</label><em class="item_price">$70.00</em></p>


                                    <div class="clearfix"></div>
                                </div>



                            </div>
                        </div>
                    </div>
        @endforeach



        <div class="clearfix"></div>
    </div>
</div>

<ul class="nav nav-pills" role="tablist">
    <li role="presentation"><a href="{{url('categories')}}">Back</a></li>
</ul>

<!--//products-->

</div>

</div>
<!--//content-->
<!--//footer-->

@include('footer');

<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript pluginss) -->
<script src="{{ URL::asset('/js/simpleCart.min.js') }}"> </script>
<!-- slide -->
<script src="{{ URL::asset('/js/bootstrap.min.js') }}"></script>
<!--light-box-files -->
<script src="{{ URL::asset('/js/jquery.chocolat.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
    $(function() {
        $('a.picture').Chocolat();
    });
</script>


</body>
</html>