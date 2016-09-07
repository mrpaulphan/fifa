<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="assets/css/screen.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <header class="page">
      <div class="header layout-split-2--apart">
        <div class="logo column">
          Fifa careers
        </div>

        <div class="account column">
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu" data-target="dropdown">
                      <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
        </div>
      </div>

    </header>
    <main class="">

      <header class="layout-split-2--apart">
        <div class="column">
            Jeff Matthews Bimingham city
        </div>
        <div class="column">
          <select class="" name="">
            <option>2015/2016</option>
            <option>2016/2017</option>
            <option>2018/2019</option>
          </select>
        </div>
      </header>
      <nav>
        <a href="{{ route('show.seasons')}}">Season</a>
        <a href="{{ route('show.players')}}">Team</a>
        <a href="{{ route('show.transfers')}}">Transfers</a>
        <a href="{{ route('show.youth')}}">Youth</a>
        <a href="{{ route('show.careers')}}">career</a>
      </nav>



    @yield('content')
    </main>
    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>
</html>
