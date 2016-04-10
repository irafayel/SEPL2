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


@include('adminmenu')

<div class="bottom-grids collections">
    <div class="container">

        <div class="col-md-9 bottom-grids-left">

            <h1>Current Categories</h1>

            @if($categories->count()>0)

                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                    <td>Name Of Category</td>
                    <td>Description</td>
                    <td></td>
                    </thead>
                    <tbody>
                    @foreach($categories as $cat)
                        <tr><td>{{$cat->cat_name}}</td>
                            <td>{{$cat->cat_desc}}</td>
                            <td><a href="{{ url('category/view/' .$cat->id) }}">View</a></td></tr>
                    @endforeach
                    </tbody>
                </table>

            @endif

        </div>


        <div class="col-md-3 bottom-grids-right">

            <form method="POST" action="{{url('category/save') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <h1>Add a Category</h1>

                <input type="text" name="cat_name" id="cat_name" placeholder="Name of Category">

                <input type="text" name="cat_desc" id="cat_desc" placeholder="Description">

                <button>Add</button>

            </form>


        </div>
    </div>
</div>



</body>

</html>