<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title> 
</head>
<body>


    @include("template.navbar")

<div class="container">
    <br><br><br>
<div class="row">
    <div class="card">
        <div class="card-body">
        <a class="btn btn-success btn-sm" href="/create">Add Inventory</a>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Category</th>
            <th scope="col">Item Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($items as $item)
            <tr>

                <td>{{ $item->category_id }}</td>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->price }}</td>
                <td>
                <a href="/inv/{{ $item->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                <button class="btn btn-danger btn-sm">Delete</button>
                </td>

            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>

</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>