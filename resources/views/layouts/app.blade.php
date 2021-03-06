<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <style media="screen">
          a:link, a:visited,  a:hover, a:active
          {
              text-decoration: none;
              color: white;
          }

        .btn_javier
        {
         cursor: pointer;
         background-color: transparent;
         color: white;
         text-decoration: underline white;
        }

        .link_javier
        {
         cursor: pointer;
         background-color: transparent;
         color: white;
         text-decoration: underline white;
         font-size= 1;
        }

        #regiration_form fieldset:not(:first-of-type)
        {
          display: none;
        }
        </style>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />
        <div class="min-h-screen bg-gray-100" style="background-color: #1a202c;">
            <!-- Page Heading -->
            @if (isset($header))
              @livewire('navigation-menu')

                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
              @if (isset($slot))
                  <main>
                    {{ $slot }}
                  </main>
              @endif
              <div class="container" style="background-color: #1a202c;">
                @yield('content')
              </div>
        </div>
        @stack('modals')
        @livewireScripts
    </body>
</html>
