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
                              
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>

                                <td>
                                    <button class="btn btn-sm btn-warning btn-action">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach

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