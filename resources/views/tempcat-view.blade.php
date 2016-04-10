<!DOCTYPE HTML>

<html>

<head>
    <title>Paint Pal</title>
    <link href="{{ URL::asset('../resources/assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <script src="{{ URL::asset('../resources/assets/js/jquery.min.js') }}"></script>
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('../resources/assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
</head>

<body>


@include('mainmenu')

<div class="bottom-grids collections">
    <div class="container">
        <div class="col-md-9 bottom-grids-left">

            <h1>{{$category->cat_name}}</h1>
            <p>{{$category->cat_desc}}</p>

            <div class="item">
                <div onclick="location.href='single-page.html';" class="product-grid">

                    @foreach($category->images as $image)

                        <div class="product-pic">
                            <img src = "{{ url ($image->file_path) }}">
                        </div>

                    @endforeach

                    <div class="product-pic-info">
                        <h3><a href="#">{{ $category->cat_name }}</a></h3>
                        <div class="product-pic-info-price-cart">
                            <div class="product-pic-info-price">
                                <span>{{ $category->cat_desc }}</span>
                            </div>
                            <div class="product-pic-info-cart">
                                <a class="p-btn" href="#">Buy now</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>



            <ul><li><a href="{{url('categories')}}">Back</a></li></ul>


        </div>
    </div>
</div>




</body>

</html>