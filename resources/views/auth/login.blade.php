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
   <body>
        <div class="w-full h-screen flex items-center justify-center">
            <div class="flex flex-col border w-64 p-4 rounded">
                <h1 class="mb-4 font-bold text-xl">Inventory Login</h1>
                <input class="border mt-2 rounded px-2 py-1 placeholder:text-sm" type="text" placeholder="User">
                <input class="border mt-2 rounded px-2 py-1 placeholder:text-sm" type="password" placeholder="Password">
                <a href="/" class="text-center bg-rose-500 text-white rounded mt-4 p-1 text-sm">SUBMIT</a>
            </div>
        </div>
   </body>
</html>
