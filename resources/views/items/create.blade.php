@extends('layouts.app')

@section('content')
<h1>Create New Item</h1>
<form method="POST" action="{{ route('items.store') }}">
    @csrf
    <label for="item_name">Item Name:</label>
    <input type="text" id="item_name" name="item_name" required>

    <label for="qty">Quantity:</label>
    <input type="number" id="qty" name="qty" required>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required step="0.01">

    <label for="category_id">Category:</label>
    <select id="category_id" name="category_id" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button type="submit">Create Item</button>
</form>
@endsection