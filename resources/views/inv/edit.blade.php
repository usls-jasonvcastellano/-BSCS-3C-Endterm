<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h3 class="mb-4">Edit Item</h3>

    <!-- Form Start -->
    <form action="/inv/{{ $items->id }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name</label>
            <input type="text" value="{{ $items->item_name }}" name="item_name" class="form-control" placeholder="Enter item name" value="{{ old('item_name') }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" value="{{ $items->price }}" name="price" class="form-control" placeholder="Enter price" value="{{ old('price') }}">
        </div>

        <div class="mb-3">
            <label for="categories_id" class="form-label">Category</label>
            <select name="categories_id" class="form-select">
                <option value="">-- Select Category --</option>
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}" {{ $items->categories_id == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Update Item</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>