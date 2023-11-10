<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            position: relative;
        }
        
        .container>div{
            width: 48%;
            margin:2px auto;
            background-color: red;
            display: inline-block;
            height: 50vh;
        }
    </style>
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    {{-- IF USER LOGGED IN --}}
    <div class="container my-4">
        <div>
            <a href="{{url('trip-planner')}}"><button type="button" class="btn btn-outline-primary">Trip Planner</button></a>
        </div>
        <div>
            <a href="{{url('navigation')}}"><button type="button" class="btn btn-outline-success">Navigation and Transportation</button></a>
        </div>
        <div>
            <a href="{{url('pools')}}"><button type="button" class="btn btn-outline-info">Pooling</button></a>
        </div>
        <div>
            <button type="button" class="btn btn-outline-dark">Communities</button>
        </div>
    </div>
    
    
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>