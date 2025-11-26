<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Bootstrap demo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .content-wrapper {
        flex: 1;
      }
      footer {
        margin-top: auto;
      }
    </style>
  </head>
  <body>

    @include('partials.navbar')
    <div class="container mt-5 pt-5"> 
      @yield('content')
    </div>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
