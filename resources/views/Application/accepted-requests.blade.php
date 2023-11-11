
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- Map Box --}}
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

    {{-- styles --}}
    </style>
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    <div class="container my-4">
        <h1>ACCEPTED POOL REQUESTS</h1>
            <div class="row my-4">
                @foreach ($accepted_pools as $pool)
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h3 class="card-title">{{created_pool($pool->user_posted_id)->city_travelling}}</h3>
                      <div>{{$pool->user_posted_id}} travellers already in pool</div>
                      <div>{{created_pool($pool->user_posted_id)->travellers_already_in_pool}} more travellers required</div>
                      <div>Will start journey at {{created_pool($pool->user_posted_id)->starting_journey_at}}</div>
                      <div>Will start journey from {{created_pool($pool->user_posted_id)->starting_journey_from}}</div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
    </div>

</body>
</html>