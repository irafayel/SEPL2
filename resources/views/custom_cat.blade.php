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

        window.onload = function ()
        {
            var canvas1 = document.getElementById("cvs1");
            var canvas2 = document.getElementById("cvs2");
            var context1 = canvas1.getContext('2d');
            var context2 = canvas2.getContext('2d');
            var imageXY  = {x: 5, y: 5};




            /**
             * This draws the image to the canvas
             */
            function Draw ()
            {
                //Clear both canvas first
                canvas1.width = canvas1.width
                canvas2.width = canvas2.width

                //Draw a red rectangle around the image
                if (state && state.dragging) {
                    state.canvas.getContext('2d').strokeStyle = 'red';
                    state.canvas.getContext('2d').strokeRect(imageXY.x - 2.5,
                            imageXY.y - 2.5,
                            state.image.width + 5,
                            state.image.height + 5);
                }

                // Now draw the image
                state.canvas.getContext('2d').drawImage(state.image, imageXY.x, imageXY.y);
            }




            canvas2.onclick =
                    canvas1.onclick = function (e)
                    {

                        if (state && state.dragging) {
                            state.dragging = false;
                            Draw();
                            return;
                        }





                        var mouseXY = RGraph.getMouseXY(e);

                        state.canvas    = e.target;

                        if (   mouseXY[0] > imageXY.x
                                && mouseXY[0] < (imageXY.x + state.image.width)
                                && mouseXY[1] > imageXY.y
                                && mouseXY[1] < (imageXY.y + state.image.height)) {

                            state.dragging       = true;
                            state.originalMouseX = mouseXY[0];
                            state.originalMouseY = mouseXY[1];
                            state.offsetX         = mouseXY[0] - imageXY.x;
                            state.offsetY         = mouseXY[1] - imageXY.y;

                        }
                    }

            canvas1.onmousemove =
                    canvas2.onmousemove = function (e)
                    {

                        if (state.dragging) {

                            state.canvas = e.target;

                            var mouseXY = RGraph.getMouseXY(e);

                            // Work how far the mouse has moved since the mousedon event was triggered
                            var diffX = mouseXY[0] - state.originalMouseX;
                            var diffY = mouseXY[1] - state.originalMouseY;

                            imageXY.x = state.originalMouseX + diffX - state.offsetX;
                            imageXY.y = state.originalMouseY + diffY - state.offsetY;

                            Draw();

                            e.stopPropagation();
                        }
                    }

            /**
             * Load the image on canvas1 initially and set the state up with some defaults
             */
            state = {}
            state.dragging     = false;
            state.canvas       = document.getElementById("cvs1");
            state.image        =  new Image();
            state.image.src    = 'http://www.rgraph.net/images/logo.png';
            state.offsetX      = 0;
            state.offsetY      = 0;

            state.image.onload = function ()
            {
                Draw();
            }
        }

    </script>
    <!---//End-rate---->

    <style>
        /* #canvas1 {
             position:relative;
             background: #FFFFFF;
             width:400px;
             height:400px;
             border:2px solid;
             border-color:#000000;
             padding:10px;
             left:40%;
         }​

         #canvas2 {
             position:relative;
             background: #FFFFFF;
             width:400px;
             height:400px;
             border:2px solid;
             border-color:#000000;
             padding:10px;
             left:5%;
         }​*/




    </style>

</head>


<body>
<!--header-->
<!--menu-->

@include('mainmenu')


<div class="content-mid">
    <canvas id = "cvs1" style = "left:5%; border:2px solid;"></canvas>

    <canvas id = "cvs2" style = "left:60%; border:2px solid;"></canvas>
</div>





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