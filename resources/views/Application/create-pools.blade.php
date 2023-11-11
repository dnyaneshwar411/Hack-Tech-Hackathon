
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
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    {{-- Take Input Data --}}
    <div class="container my-4">
        <h1 class="my-4">CREATE POOL</h1>
        <form action="{{url('pools/create')}}" method="post">
            @csrf
            <div class="mb-3">
              <label for="travellers_already_in_pool" class="form-label">No of People already Travelling</label>
              <input required type="number" class="form-control" name="travellers_already_in_pool" id="travellers_already_in_pool" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="total_travellers_required" class="form-label">How many more required</label>
              <input required type="number" class="form-control" name="total_travellers_required" id="total_travellers_required" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="city_travelling" class="form-label">Which city are you travelling?</label>
              <input required type="text" class="form-control" name="city_travelling" id="city_travelling" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="areas_travelling" class="form-label">Areas Travelling</label>
              <input required type="text" class="form-control" name="areas_travelling" id="areas_travelling" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="contribution" class="form-label">Contribution of per/head *in Rs</label>
              <input required type="number" class="form-control" name="contribution" id="contribution" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="vehicle" class="form-label">Vehicle</label>
              <input required type="text" class="form-control" name="vehicle" id="vehicle" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="starting_journey_at" class="form-label">Starting Journey At?</label>
              <input required type="datetime-local" class="form-control" name="starting_journey_at" id="starting_journey_at" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="starting_journey_from" class="form-label">Starting Journey from</label>
              <input required type="text" class="form-control" name="starting_journey_from" id="starting_journey_from" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>