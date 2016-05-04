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

        function drawCircle(){
            addCircle(canvas.width/2 - (SIZE * 2.5), canvas.height/2, SIZE, "#006699");
            stage.update();
        }

        var i =0;

        function add() {



            //Create an input type dynamically.
            var textfield = document.createElement("input");

            //Assign different attributes to the element.
            textfield.setAttribute("type", Text);
            textfield.setAttribute("value", "");
            textfield.setAttribute("id", "Text"+i);

            var label = document.createElement("label");

            label.setAttribute("type", label);
            label.setAttribute("value", "Text Field" + i);
            label.setAttribute("id", "label"+i);



            var foo = document.getElementById("fooBar");


            i++;
            //Append the element in page (in span).
            foo.appendChild(textfield);
            foo.appendChild(label);

            document.getElementById("label"+i).innerHTML = 'hai';

        }

    </script>

</head>
<body onload="init();">
@include('mainmenu')



    <div class="bottom-grids collections">
        <div style="width:95%" class="container">

            <div class="content-mid">
                <h3>Customized Request</h3>
                <label class="line"></label>
            </div>

            <div class="col-md-3 bottom-grids-right">
                <div><button class="btn btn-lg btn-primary" onClick="drawCircle()">Draw 1</button></div>
                <div><button class="btn btn-lg btn-primary" onClick="addText()">Draw 2</button></div>
                <div><button class="btn btn-lg btn-primary" >Draw 3</button></div>
                <div><button class="btn btn-lg btn-primary" >Draw 4</button></div>
                <div><button class="btn btn-lg btn-primary" >Draw 5</button></div>
                <div><button class="btn btn-lg btn-primary" >Draw 6</button></div>

                <div id="fooBar">



                </div>

            </div>



            <form method="POST" action="{{url('testsave')}}"  id="addImages" name ="addImages">
                {{ csrf_field() }}


                    <canvas id="canvas" width="800" height="500"  style =" left:10%; border:1px solid">
                        This text is displayed if your browser does not support HTML5 Canvas.
                    </canvas>

                <input type="hidden" value ="" id="cat_id" name="cat_id">

                <div class="col-md-3 bottom-grids-right">
                    <button style ="" class="btn btn-lg btn-primary" onClick="saveImage()" id="button">Save</button>

                    <SELECT name="element">
                        <OPTION value="button">Button</OPTION>
                        <OPTION value="text">Textbox</OPTION>
                        <OPTION value="radio">Radio</OPTION>
                    </SELECT>

                    <!--document.forms[0].element.value-->

                    <INPUT class="btn btn-lg btn-primary" type="button" value="Add" onclick="add()"/>
                </div>
            </form>


        </div>

    </div>


<script src="https://code.createjs.com/easeljs-0.8.2.min.js"></script>

<script>

    var stage;
    var SIZE = 50;

    var canvas;



    function init() {
        //resize canvas to full width and height

        canvas = document.getElementById("canvas");

        canvas.width = 800;
        canvas.height = 500;

        stage = new createjs.Stage(canvas);

        //alert("i loaded");

        addCircle(canvas.width/2 - (SIZE * 2.5), canvas.height/2, SIZE, "#e74c3c");
        addStar(canvas.width/2, canvas.height/2, SIZE, "#f1c40f");
        addRoundedSquare(canvas.width/2 + (SIZE * 2.5), canvas.height/2, SIZE * 2, 5, "#9b59b6");

        stage.update();
    }

    function addCircle(x, y, r, fill) {
        var circle = new createjs.Shape();
        circle.graphics.beginFill(fill).drawCircle(0, 0, r);
        circle.x = x;
        circle.y = y;
        circle.name = "circle";
        circle.on("pressmove",drag);
        stage.addChild(circle);
    }

    function addStar(x, y, r, fill) {
        var star = new createjs.Shape();
        star.graphics.beginFill(fill).drawPolyStar(0, 0, r, 5, 0.6, -90);
        star.x = x;
        star.y = y;
        star.name = "star";
        star.on("pressmove",drag);
        stage.addChild(star);
    }

    function addRoundedSquare(x, y, s, r, fill) {
        var square = new createjs.Shape();
        square.graphics.beginFill(fill).drawRoundRect(0, 0, s, s, r);
        square.x = x - s/2;
        square.y = y - s/2;
        square.name = "square";
        square.on("pressmove",drag);
        stage.addChild(square);
    }

    function addText(){

        var text=new createjs.Text("Hello");

        text.x=100;
        text.y=100;

        //alert("hai");

        text.on("pressmove",drag);

        stage.addChild(text);
        stage.update();
    }

    function drag(evt) {
        // target will be the container that the event listener was added to
        if(evt.target.name == "square") {
            evt.target.x = evt.stageX - SIZE;
            evt.target.y = evt.stageY - SIZE;
        }
        else  {
            evt.target.x = evt.stageX;
            evt.target.y = evt.stageY;
        }

        // make sure to redraw the stage to show the change
        stage.update();
    }

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