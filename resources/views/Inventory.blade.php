<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-column min-vh-100 bg-white" id="inventory">
        <div class="position-absolute top-0 start-0 h-100 w-25 bg-custom"></div>
        <div class="position-relative z-1 mx-auto w-50 p-4">
            <div class="container bg-white p-4 rounded shadow">
                <h2 class="fw-bold mb-3">Inventory</h2>

    
                <button class="btn btn-primary mb-3">Add Product</button>
                    



                <div class="row bg-light p-3 rounded fw-bold text-center">
                    <div class="col">Category</div>
                    <div class="col">Item Name</div>
                    <div class="col">Qty</div>
                    <div class="col">Price</div>
                    <div class="col">Action</div>
                </div>
                <div class="row p-3 border-bottom align-items-center text-center">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col">$</div>
                    <div class="col">
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>