
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

    <div class="container my-4">
        <h1 class="my-4">Trip Planner</h1>
        <input id="location" type="text" placeholder="Enter Location">
        <button class="btn-primary" onclick="airports()">Find Restaurants Nearby</button>
        <input id="restaurant" type="text" placeholder="Enter Location">
        <button class="btn-primary" onclick="restaurants()">Find Restaurants Nearby</button>

        
        {{-- <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Destination Spot</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form> --}}
    </div>

    <script>
      const airports = function(){
        const location = document.querySelector('#location').value;
        const fetchData = async () => {
        const url = `https://tripadvisor16.p.rapidapi.com/api/v1/flights/searchAirport?query=${location}`;
        const options = {
          method: 'GET',
          headers: {
            'X-RapidAPI-Key': 'ec210791b4msh7f2bfc406379ec4p1d1ed7jsn677278e5fc95',
            'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
          }
        };
  
          try {
            const response = await fetch(url, options);
            const result = await response.json();
            console.log(result.data);
            return result;
          } catch (error) {
            console.error(error);
          }
        };
  
        // Call the asynchronous function
        const result = fetchData();
      }

      const restaurants = function(){
        async function fetchData() {
        const restaurants = document.querySelector('#location').value;
        const url = `https://tripadvisor16.p.rapidapi.com/api/v1/restaurant/searchLocation?query=${restaurants}`;
        const options = {
          method: 'GET',
          headers: {
            'X-RapidAPI-Key': 'ec210791b4msh7f2bfc406379ec4p1d1ed7jsn677278e5fc95',
            'X-RapidAPI-Host': 'tripadvisor16.p.rapidapi.com'
          }
        };

        try {
          const response = await fetch(url, options);
          const result = await response.json();
          console.log(result);
        } catch (error) {
          console.error(error);
        }
      }

      // Call the asynchronous function
      fetchData();

      }
    </script>
  </body>
</html>