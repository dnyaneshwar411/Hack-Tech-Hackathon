<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hawks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- External Stylesheet --}}
  <link rel="stylesheet" href="{{asset('css/community.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    {{-- Font Awesome --}}<!-- Font awesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  @livewireStyles
  </head>
  <body>
    {{-- Nav Bar --}}
    @include('Application.partials.navbar')

    <div class="container my-4 py-4">
        <h1>COMMUNITY CONTENT</h1>
        <div class="wrapper">
            <ul>
              @foreach ($contents as $content)
                @if (Auth::user()->id == $content->user_id)
                    <li class="right-user">
                      @if ($content->content_type == 'image')  
                        <img style="width: 30%" src="{{asset('storage/photos/'.$content->content)}}" alt="">
                      @else
                        {{$content->content}}
                    </li>
                  @endif
                @else
                  <li class="left-user">
                    @if ($content->content_type == 'image')  
                      <img style="width: 30%" src="{{asset('storage/photos/'.$content->content)}}" alt="">
                    @else
                      {{$content->content}}
                    @endif
                  </li>
                  @endif
              @endforeach
            </ul>
            <div class="chatbox">
                <div class="chatbox-wrapper">
                    {{-- <form action="">
                        @csrf
                        <label for="plus"><i class="fa-solid fa-plus" id=""></i></label>
                        <input type="file" name="file" id="plus">
                        <input type="text" placeholder="message" >
                        <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-paper-plane"></i></button>
                    </form> --}}
                    <livewire:community-chat />
                </div>
            </div>
          </div>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    @livewireScripts  
  </body>
</html>