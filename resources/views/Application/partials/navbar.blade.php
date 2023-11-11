<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{url('/')}}">Hawks</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{url('trip-planner')}}" class="nav-link active" aria-current="page" href="#">Planner</a>
          </li>
          <li class="nav-item">
            <a href="{{url('navigation')}}" class="nav-link" href="#">Navigation</a>
          </li>
          <li class="nav-item">
            <a href="{{url('pools')}}" class="nav-link" href="#">Pooling</a>
          </li>
          <li class="nav-item">
            <a href="{{url('community')}}" class="nav-link" href="#">Communities</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/pools/accepted-requests')}}" class="nav-link" href="#">Accepted Requests</a>
          </li>
          <li class="nav-item">
            <a href="{{url('/pools/requests')}}" class="nav-link" href="#">Requests to your pool</a>
          </li>
        </ul>
      </div>
    </div>
</nav>