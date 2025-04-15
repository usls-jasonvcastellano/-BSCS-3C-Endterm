@extends('template.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Categories List</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
