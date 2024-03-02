<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Scripts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link {{ request()->is('/') ? 'active' : ''}}" aria-current="page" href="/">Todos</a>
                <a class="nav-link {{ request()->is('counter') ? 'active' : ''}}" aria-current="page" href="/counter">Counter</a>
                <a class="nav-link {{ request()->is('show-posts') ? 'active' : ''}}" aria-current="page" href="/show-posts">Posts</a>
              </div>
            </div>
          </div>
        </nav>

        <div class="container-fluid px-4">
          {{ $slot }}
        </div>  
    </body>
</html>
