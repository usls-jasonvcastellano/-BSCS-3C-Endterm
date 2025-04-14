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

    <!-- Form Start -->
    <form action="/categories" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter category name" value="{{ old('name') }}">
        </div>

        <div class="d-flex justify-content-between">
            <a href="/categories" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
