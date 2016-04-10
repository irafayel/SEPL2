<html>

<head>

    <title>Hey again</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.css">

</head>

<body>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>

    <div>
        <form action="{{url('test/do-upload')}}" class="dropzone" id="addImages"/>
        {{ csrf_field() }}
    </div>

    @foreach($tests as $tests)
    <div>
        <img src="{{ url($tests->file_path) }}">
    </div>
    @endforeach

</body>



</html>