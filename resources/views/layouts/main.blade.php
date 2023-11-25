<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- My Css --}}
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>ARS | Online Compiler</title>
  </head>
  <body>
    <nav class="mt-2 mx-2 navbar navbar-expand-lg navbar-dark bg-dark rounded">
      <div class="container-fluid text-center">
        <a class="navbar-brand mx-auto" href="https://www.akhdani.co.id/">ARS Online Compiler</a>
      </div>
    </nav>

    <main class="mx-2 mt-2">
      @yield('container')
    </main>

    <script src="js/script.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>