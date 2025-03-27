<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Terrenze</td>
                <td>Dane</td>
                <td>Td@gmail.com</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Thor</td>
                <td>Thunder</td>
                <td>strongestAvenger@gmail.com</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Bird</td>
                <td>Birdy@gmail.com</td>
            </tr>
        </tbody>

    </table>
     <!-- button to login -->

     <div class="mt-3">
            <a href="{{ route('login') }}" class="btn btn-success">Go to Login</a>
        </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>