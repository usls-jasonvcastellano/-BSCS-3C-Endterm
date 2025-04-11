<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Add any CSS or meta tags here -->
</head>
<body>
    <header>
        <!-- Add your navigation bar or header content here -->
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>