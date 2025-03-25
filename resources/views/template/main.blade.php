<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <title>Create</title>
  </head>
  
  <body>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Users</th>
      <th scope="col">Items</th>
      <th scope="col">Categories</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>May</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>o</td>
      <td>o</td>
      <td>o</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">2</td>
      <td>1</td>
    </tr>
  </tbody>
</table>

    <div class="container">

    @yield('content')
      
    
    </div>
  </body>
</html>