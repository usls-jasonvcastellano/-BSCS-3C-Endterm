@extends('template.main')

@section('title', 'Edit Item')

@section('content')
<div class="container mt-4">
    <h2>Edit Item</h2>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name:</label>
            <input type="text" name="item_name" id="item_name" class="form-control" value="{{ $item->item_name }}" required>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">Quantity:</label>
            <input type="number" name="qty" id="qty" class="form-control" value="{{ $item->qty }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" value="{{ $item->price }}" required>
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Category:</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Item</button>
    </form>
</div>
@endsection
