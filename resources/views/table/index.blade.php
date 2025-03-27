<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>EspeletaDon</title>
</head>
<body>
    <div class = "card-body">
        <table class = "table">
            <thead>
                <tr>
                    <th>#</th>
                    <th scope = "col">Category Name</th>
                    <th scope = "col">Description</th>
                    <th scope = "col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $i => $category)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $category->features }}</td> 
                    <td>{{ $category->description }}</td>
                    <td>
                        <button class="btn btn-info btn-sm">Edit</button>
                        <button class="btn btn-info btn-sm">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
        {!!  $categories -> links() !!}
    </div>
</body>
</html>
