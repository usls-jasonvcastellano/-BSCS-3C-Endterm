<!doctype html>
<html lang="en">

<head style = "font-family: 'Poppins', sans-serif;">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <h5 class = "mt-2"
        style = "text-align: center; font-family: 'Courier New', Courier, monospace; font-size: small; text-decoration: dotted;">
        free international shipping on orders $150+ USD. free returns always. </h5>

    <div class = "d-flex justify-content-center mt-2" style = "width: 100  %; font-size: 8;">
        <div class = "container rounded-3"
            style = "background-color: rgb(255, 254, 254); width: 90%; height: 40px; color: black;">


            <ul class = "nav nav-tabs card-header-tabs justify-content-center">

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> R.E.M BEAUTY </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> NEW COLLECTION </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" href = "#"> LOG IN </a>
                </li>

                <li class = "nav-item">
                    <a class = "nav-link disabled" aria-current="true" href = "#"> CATALOG </a>
                </li>

                <li class= "nav-item">
                    <a class = "nav-link disabled" aria-disabled = "true"> BEST SELLERS </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);">
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
