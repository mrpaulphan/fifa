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
    <header class="page-gutterless">
      <div class="header layout-split-2--apart">
        <div class="logo__column ">
            <img class="logo__column-img" src="http://placehold.it/200x30" alt="" />

        </div>

        <div class="account__column">
          @if (Auth::guest())
              <p><a class="button button--secondary" href="{{ url('/login') }}">Login</a></p>
              <p><a class="button button--primary" href="{{ url('/register') }}">Register</a></p>
          @else
              <li class="dropdown">
                  <img class="account__column-img" src="/assets/images/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" />
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

    <main class="page">
        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="/assets/js/script.js"></script>
</body>
</html>
