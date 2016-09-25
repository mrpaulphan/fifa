<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fifa - @yield('title')</title>

    <!-- Styles -->
    <link href="/assets/css/screen.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="body__background">
    <header class="header page">
      <div class="layout-split-2--apart-center">
        <div class="column ">
            <a href="{{ route('show.saves', [Auth::user()->username])}}" class="logo"><?php echo file_get_contents('assets/svgs/logo.svg'); ?></a>
        </div>
        <div class="column">
          @if (Auth::guest())
              <p><a class="button button--secondary" href="{{ url('/login') }}">Login</a></p>
              <p><a class="button button--primary" href="{{ url('/register') }}">Register</a></p>
          @else
              <li class="dropdown">
                  <img class="avatar" src="/assets/images/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" />
                  <a href="#" class="dropdown-toggle" data-trigger="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu" data-toggle="dropdown">
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

    <main class="page background-white" spacing="1">
        <div class="navigation">
            <header class="layout-split-2--apart">
              <div class="team__content column">
                  <div class="">
                      <h2>@yield('name')</h2>
                      <p class="team__name">@yield('manager')</p>
                  </div>

              </div>
                <div class="column">
                    <select class="" name="">
                      <option>2015/2016</option>
                      <option>2016/2017</option>
                      <option>2018/2019</option>
                    </select>
                </div>
            </header>
            <nav class="menu__nav" >
              <a class="nav__link" href="">Season</a>
              <a class="nav__link" href="">Team</a>
              <a class="nav__link" href="">Transfers</a>
              <a class="nav__link" href="">Youth</a>
              <a class="nav__link" href="">careers</a>
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </main>

    <!-- Scripts -->
    <script src="/assets/js/script.js"></script>
</body>
</html>
