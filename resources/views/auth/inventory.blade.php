<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Responsive Table</title>
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .table-container {
            overflow-x: auto; 
        }

        .btn-action {
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card p-3 shadow">
            <div class="table-container">
                <table class="table table-bordered table-hover">
                    <thead class=>
                        <tr>
                            <th scope="col">Category</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Computer</td>
                            <td>Lenovo</td>
                            <td>80</td>
                            <td>40,232.00</td>
                            <td>
                                <button class="btn btn-sm btn-warning btn-action">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Cars</td>
                            <td>Civic</td>
                            <td>2</td>
                            <td>140,232.00</td>
                            <td>
                                <button class="btn btn-sm btn-warning btn-action">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>Fruit</td>
                            <td>Tomato</td>
                            <td>180</td>
                            <td>40.00</td>
                            <td>
                                <button class="btn btn-sm btn-warning btn-action">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        
            <div class="d-flex justify-content-end mt-2">
                <button class="btn btn-success">Add</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
