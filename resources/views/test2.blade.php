<html>
<head>

    <tiltle>
        Testing
    </tiltle>
</head>

    <body>

        <div class="row"></div>
            <div class="col-md-8">
                @if($test2->count() > 0)
                    <table>
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Desig</th>
                        </tr>

                        </thead>

                        <tbody>
                            @foreach($test2 as $test)
                                <tr>
                                    <td>{{$test->name}}</td>
                                    <td>{{$test->designation}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @endif

            </div>

            <div class>
                <form method="POST" action="{{url('test2/save')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <input type="text" name="test2" id="test2" placeholder="just enter something"/>
                    </div>

                    <button>save</button>

                </form>
            </div>
        </div>


    </body>



</html>