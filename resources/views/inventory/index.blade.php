@extends('template.main')

@section('title', 'Inventory Management')

@section('content')
<div class="container">
    <div class="inventory-box">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="inventory-title">📦 Inventory Management</h3>
            <a href="{{ route('inventory.create') }}" class="btn btn-add">+ Add Item</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Categories</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventoryItems as $item)
                        <tr>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <a href="#" class="btn btn-edit">Edit</a>
                                <form action="#" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
