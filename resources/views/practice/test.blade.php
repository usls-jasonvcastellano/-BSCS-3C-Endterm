<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <title>Exam</title>

</head>

<body>
    <div class = "container card mt-5">

        <table class="table">

            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Feature Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($test as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->feature_name }}</td>
                    <td>{{ $item->description }}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>

    </div>

</body>

</html>
