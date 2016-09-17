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
            <img class="logo__column-img" src="assets/img/Fifa_careers_logo.png" alt="" />
          <h1 class="bold">FIFA Careers</h1>
        </div>

        <div class="account__column">
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <img class="account__column-img" src="assets/img/account_image.jpg" alt="" />
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






    <main class="page main__content" spacing="1" >

      <header class="layout-split-2--apart" >
        <div class="team__content column">
            <img src="assets/img/team_image.png" alt="" />
            <div class="team__content-text">
                <h2>@yield('save_name')</h2><span class="team__name">@yield('save_manager_name')</span>

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
        <a  class="nav__link active" href="">Season</a>
        <a class="nav__link" href="">Team</a>
        <a class="nav__link" href="">Transfers</a>
        <a class="nav__link" href="">Youth</a>
        <a class="nav__link" href="">careers</a>
      </nav>



    @yield('content')
    </main>

    <!-- Scripts -->
    <script src="/assets/js/script.js"></script>
</body>
</html>
