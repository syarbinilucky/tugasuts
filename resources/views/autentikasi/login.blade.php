<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>LOGIN SIAKAD STMIK SZNW</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/app-dark.css" id="darkTheme" disabled>
  </head>
  <body class="light ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form action="/loginuser" method="post" class="col-lg-3 col-md-4 col-10 mx-auto text-center">
          @csrf
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="#">
            <span class="avatar avatar-sm mt-2">
              <img src="./assets/avatars/LOGO.png" alt="..." class="avatar-img rounded-circle">
          </span>
          </a>
          <h1 class="h4 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="email" class="form-control form-control-lg" name="email" placeholder="email" required="" autofocus="">
          </div>
          <div class="form-group">
            <label for="Password" class="sr-only">Password</label>
            <input type="password" id="Password" name="password" class="form-control form-control-lg" placeholder="Password" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <p class="mt-2 mb-3 text-muted">
            <a href="/register" class="text-center"> Regsister a new member</a>
          </p>
        </form>
      </div>
    </div>
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/moment.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/simplebar.min.js"></script>
    <script src='{{ asset('assets') }}/js/daterangepicker.js'></script>
    <script src='{{ asset('assets') }}/js/jquery.stickOnScroll.js'></script>
    <script src="{{ asset('assets') }}/js/tinycolor-min.js"></script>
    <script src="{{ asset('assets') }}/js/config.js"></script>
    <script src="{{ asset('assets') }}/js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>
</body>
</html>
