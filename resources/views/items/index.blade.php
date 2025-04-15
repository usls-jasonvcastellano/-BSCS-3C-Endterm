@extends('template.main')

@section('title', 'Items List')

@section('content')
<div class="container mt-4">
    <h2>Items List</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
            <tr>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->category->name ?? 'No Category' }}</td>
                <td>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-sm">Update</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No items found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
