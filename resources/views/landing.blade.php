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

          @endif
        </div>
      </div>

    </header>


    <main class="page main__content" spacing="1" >



    </main>

    <!-- Scripts -->
    <script src="assets/js/script.js"></script>
</body>
</html>
