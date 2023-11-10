
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Map Box --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    {{-- styles --}}
    <style>
        .container>div{
            width: 48%;
            display: inline-block;
            background-color: red;
            height: 50vh;
        }
    </style>
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    <div class="container my-4">
        <div>
            <a href="{{url('pools/create')}}"><button class="btn btn-outline-primary">Create a Pool</button></a>
        </div>
        <div>
            <a href="{{url('pools/join')}}"><button class="btn btn-outline-primary">Join a Pool</button></a>
        </div>
    </div>

</body>
</html>