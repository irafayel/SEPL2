<!DOCTYPE HTML>

<html>

<head>
    <title>Shopin A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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

<!-- menu -->
@include('adminmenu')


<div class="bottom-grids collections">
    <div class="container">

        <!-- Table of categories -->
        <div class="col-md-9 bottom-grids-left">

            <div class="content-mid">
            <h3>Current Categories</h3>
            <label class="line"></label>
                </div>

            @if($categories->count()>0)

                <div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
                    <table class="table">
                        <thead>
                        <tr class="danger">
                            <th>#</th>
                            <th>Name Of Category</th>
                            <th>Description</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $cat)


                            <tr class="warning">
                                <th scope="row">{{$cat->id}}</th>
                                <td>{{$cat->cat_name}}</td>
                            <td>{{$cat->cat_desc}}</td>
                            <td><a href="{{ url('category/view/' .$cat->id) }}">View</a></td>
                            <td>

                                <a href="{{ url('category/delete/' .$cat->id) }}">Delete</a>

                                <!-- <button value ="Delete" href="#"  type="button" onClick="return confirmChange()"></button>

                                <script>

                                    function confirmChange() {

                                        var answer = confirm("Are you sure?");

                                        if (answer == true) {

                                            href="{{ url('category/delete/' .$cat->id) }}"

                                            return redirect({{ url('category/delete/' .$cat->id) }});

                                        } else {
                                            //do something
                                            return false;
                                        }
                                    }
                                </script>-->

                            </td></tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>

            @endif

        </div>
        <!-- /table -->

        <!-- Add category -->
        <div class="col-md-3 bottom-grids-right">

            <div class="content-mid">
                <h3>Add Category</h3>
                <label class="line"></label>
            </div>

            <div class="bs-example" data-example-id="simple-horizontal-form">

                @if(count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form  method="POST" action="{{url('category/save') }}" class="form-horizontal">


                        <input type="hidden" name="_token" value="{{ csrf_token() }}">



                        <div class="form-group">
                        <input type="text" name="cat_name" id="cat_name" placeholder="Name of Category" class="form-control"
                               value="{{ old('cat_name') }}">
                        </div>

                        <div class="form-group">
                        <input type="text" name="cat_desc" id="cat_desc" placeholder="Description" class="form-control"
                               value="{{ old('cat_desc') }}">
                        </div>



                    <button class="btn btn-lg btn-primary">Add</button>

                </form>
            </div>


        </div>
        <!-- /Add category -->
    </div>
</div>

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