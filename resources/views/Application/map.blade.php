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
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

<div class="container my-4">
    <div class="mb-4">
        <button class="btn btn-primary">Detect My Location</button>
        <input type="text" placeholder="Enter your Location" class="mx-4">
        <input type="text" placeholder="Destination Location" class="mx-4">
    </div>
    <div id='map' style='width: 100%; height: 80vh'></div>
</div>
    
    
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZG55YW5lc2h3YXI0MTEiLCJhIjoiY2xvc3F6ZWtiMDQxczJpcWVyYTF2MWMzOCJ9.v6LxRVRuTxtmg5EUUJAIiQ';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            style: 'mapbox://styles/mapbox/streets-v12', // style URL
            center: [-74.5, 40], // starting position [lng, lat]
            zoom: 9 // starting zoom
        });
    </script>

  </body>
</html>