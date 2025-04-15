<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h3 class="mb-4">Add Category</h3>


    <form action="/category/store" method="POST">

        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input 
                type="text" 
                name="category_name" 
                id="name" 
                class="form-control" 
                placeholder="Enter category name" 
                value="{{ old('name') }}" 
                required
            >
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                name="description" 
                id="description" 
                class="form-control" 
                placeholder="Enter category description" 
                rows="4"
            >{{ old('description') }}</textarea>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/inventory" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save Category</button>
        </div>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
