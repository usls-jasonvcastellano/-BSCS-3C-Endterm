@extends('template.main')

@section('title', 'Categories Management')

@section('content')
    <div class="inventory-box">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="inventory-title">📂 Category Management</h3>
            <a href="{{ route('inventory.create') }}" class="btn btn-add">+ Add Item</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('inventory.create', ['category_id' => $category->id]) }}" class="btn btn-primary">
                                    + Add Item
                                </a>
                                <button class="btn btn-edit">Edit</button>
                                <button class="btn btn-delete">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
