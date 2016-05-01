<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />


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

        function saveImage(){



            var canvas = document.getElementById("canvas");

            if (canvas.getContext) {
                var ctx = canvas.getContext("2d");                // Get the context for the canvas.
                var myImage = canvas.toDataURL("images/png");       // Get the data as an image.
            }

            /*$img = myImage.replace('data:image/png;base64,', '');

            $img = $img.replace(' ', '+');

            $data = atob($img);*/

            var form = document.forms['addImages'];

            var formElement = form.elements['cat_id'];

            formElement.value=myImage;

        }


    </script>

</head>
<body>
@include('mainmenu')



    <div class="bottom-grids collections">
        <div style="width:95%" class="container">

            <div class="content-mid">
                <h3>Customized Request</h3>
                <label class="line"></label>
            </div>

            <div class="col-md-3 bottom-grids-right">
                <button class="btn btn-lg btn-primary" >Draw 1</button>
                <button class="btn btn-lg btn-primary" >Draw 2</button>
                <button class="btn btn-lg btn-primary" >Draw 3</button>
                <button class="btn btn-lg btn-primary" >Draw 4</button>
                <button class="btn btn-lg btn-primary" >Draw 5</button>
                <button class="btn btn-lg btn-primary" >Draw 6</button>
            </div>

            <form method="POST" action="{{url('testsave')}}"  id="addImages" name ="addImages">
                {{ csrf_field() }}


                    <canvas id="canvas" width="800" height="500"  style =" left:10%; border:1px solid">
                        This text is displayed if your browser does not support HTML5 Canvas.
                    </canvas>



                <input type="hidden" value ="" id="cat_id" name="cat_id">

                <div class="col-md-3 bottom-grids-right">
                    <button style ="" class="btn btn-lg btn-primary" onClick="saveImage()" id="button">Save</button>
                </div>




            </form>


        </div>

    </div>

   <!-- <script type="text/javascript">

        var canvas;
        var ctx;
        var x = 75;
        var y = 50;
        var WIDTH = 800;
        var HEIGHT = 500;
        var dragok = false;

        function rect(x,y,w,h) {
            ctx.beginPath();
            ctx.rect(x,y,w,h);
            ctx.closePath();
            ctx.fill();
        }

        function clear() {
            ctx.clearRect(0, 0, WIDTH, HEIGHT);
        }

        function init() {
            canvas = document.getElementById("canvas");
            ctx = canvas.getContext("2d");

            return setInterval(draw, 10);
        }

        function draw() {
            clear();
            ctx.fillStyle = "#FAF7F8";
            rect(0,0,WIDTH,HEIGHT);
            ctx.fillStyle = "#444444";
            rect(x - 15, y - 15, 30, 30);
        }

        function myMove(e){
            if (dragok){
                x = e.pageX - canvas.offsetLeft;
                y = e.pageY - canvas.offsetTop;
            }
        }

        function myDown(e){
            if (e.pageX < x + 15 + canvas.offsetLeft && e.pageX > x - 15 +
                    canvas.offsetLeft && e.pageY < y + 15 + canvas.offsetTop &&
                    e.pageY > y -15 + canvas.offsetTop){
                x = e.pageX - canvas.offsetLeft;
                y = e.pageY - canvas.offsetTop;
                dragok = true;
                canvas.onmousemove = myMove;
            }
        }

        function myUp(){
            dragok = false;
            canvas.onmousemove = null;
        }

        init();
        canvas.onmousedown = myDown;
        canvas.onmouseup = myUp;

    </script> -->

<script>


    var canvas;
    var ctx;
    var x = 75;
    var y = 50;
    var dx = 5;
    var dy = 3;
    var WIDTH = 800;
    var HEIGHT = 500;
    var dragok = false,
            text = "Hey there im movin!",
            textLength = (text.length * 14)/2;

    function rect(x,y,w,h) {
        ctx.font = "14px Arial";
        ctx.fillText("Hey there im a movin!!", x, y);
    }

    function clear() {
        ctx.clearRect(0, 0, WIDTH, HEIGHT);
    }

    function init() {
        canvas = document.getElementById("canvas");
        ctx = canvas.getContext("2d");
        return setInterval(draw, 10);
    }

    function draw() {
        clear();
        ctx.fillStyle = "#FAF7F8";
        ctx.fillStyle = "#444444";
        rect(x - 15, y + 15, textLength, 30);
    }

    function myMove(e){
        if (dragok){
            x = e.pageX - canvas.offsetLeft;
            y = e.pageY - canvas.offsetTop;
        }
    }

    function myDown(e){
        if (e.pageX < x + textLength + canvas.offsetLeft && e.pageX > x - textLength + canvas.offsetLeft && e.pageY < y + 15 + canvas.offsetTop &&
                e.pageY > y -15 + canvas.offsetTop){
            x = e.pageX - canvas.offsetLeft;
            y = e.pageY - canvas.offsetTop;
            dragok = true;
            canvas.onmousemove = myMove;
        }
    }

    function myUp(){
        dragok = false;
        canvas.onmousemove = null;
    }

    init();
    canvas.onmousedown = myDown;
    canvas.onmouseup = myUp;

</script>



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