<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <nav class="">
            <div class="mx-auto px-2 sm:px-6 lg:px-8">
              <div class="relative flex h-16 items-center justify-start">

                <div class="flex items-center justify-start sm:items-stretch sm:justify-start">
                  <div class=" ">
                    <div class="flex space-x-4">
                      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                      <a href="/"  @class(['current' => request()->is('/')]) aria-current="page">Todos</a>
                      <a href="/counter" @class(['current' => request()->is('counter')])>Counter</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </nav>
        {{ $slot }}
    </body>
</html>
