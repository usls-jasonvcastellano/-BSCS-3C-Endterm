<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Inventory System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
           <li class="nav-item active">
             <a class="nav-link" href="/">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/inventory">Inventory</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/categories">Categories</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="/add-items">Add Items</a>
           </li>
         </ul>
      </div>
    </nav>

    <div class="container mt-4">
      @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>