<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
   <body class="flex">
        @include("components.sidebar")
        <div class="w-full h-screen flex items-center justify-center">
          <div class="flex flex-col">
            <h1 class="text-2xl">Inventory's Dashboard</h1>
            {{-- <a class="border text-neutral-500 rounded p-1 text-sm mt-4 text-center" href="/auth/login">Login </a> --}}
          </div>
        </div>
   </body>
</html>
