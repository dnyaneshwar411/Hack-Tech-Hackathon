<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            position: relative;
        }
        
        .container>div{
            text-align: center;
            width: 48%;
            margin:2px auto;
            background-color: rgba(0, 0, 0, 0.75);
            background-blend-mode: multiply;
            display: inline-block;
            height: 50vh;
            background-size: cover;
            background-position: center center;
            position: relative;
        }
        .container button{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            font-size: 20px;
            font-weight: 600;
        }
    </style>
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    {{-- IF USER LOGGED IN --}}
    <div class="container my-4">
        <div style="background-image: url('{{asset('/assets/trip-planner.avif')}}')">
            <a href="{{url('trip-planner')}}"><button type="button" class="btn btn-primary">Trip Planner</button></a>
        </div>
        <div style="background-image: url('{{asset('/assets/navigation.avif')}}')">
            <a href="{{url('navigation')}}"><button type="button" class="btn btn-success">Navigation and Transportation</button></a>
        </div>
        <div style="background-image: url('{{asset('/assets/pooling.jpg')}}')">
            <a href="{{url('pools')}}"><button type="button" class="btn btn-info">Pooling</button></a>
        </div>
        <div style="background-image: url('{{asset('/assets/community.jpg')}}')">
            <a href="{{url('community')}}"><button type="button" class="btn btn-dark">Communities</button></a>
        </div>
    </div>
    
    
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>