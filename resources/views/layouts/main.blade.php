<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- icon --}}
    <link rel="shortcut icon" href="/img/BigLogo.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@500;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome & Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>{{ $title }}</title>
  </head>
  <body>
    {{-- TOAST --}}
    {{-- SESSION --}}
    @if (session()->has('updated'))
    <div class="z-3 position-fixed bottom-0 end-0 p-3 d-block">
      <div id="toast" class="toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('updated') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
    @endif
    @if (session()->has('verified'))
    <div class="z-3 position-fixed bottom-0 end-0 p-3 d-block">
      <div id="toast" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
            {{ session('verified') }}
          </div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
    </div>
    @endif

    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
      // Munculkan toast
      document.addEventListener('DOMContentLoaded', function () {
        var updatedToast = document.getElementById('toast');
        var toast = new bootstrap.Toast(updatedToast);
        toast.show();
      
        // Atur waktu timeout
        setTimeout(function () {
          toast.hide();
        }, 3000);
      });
    </script>
    
  </body>
</html>