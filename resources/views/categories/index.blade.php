@extends('templates.main')

@section('title', 'Categories List')

@section('content')
<div class="container">
  <h2 class="mb-4">Categories List</h2>
  <table class="table table-bordered table-hover">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Category Name</th>
        <th>Description</th>
        <th>Created At</th>
        <th>Updated At</th>
      </tr>
    </thead>
    <tbody>
      @foreach($categories as $category)
        <tr>
          <td>{{ $category->id }}</td>
          <td>{{ $category->name }}</td>
          <td>{{ $category->description ?? 'No description' }}</td>
          <td>{{ $category->created_at ? $category->created_at->format('Y-m-d H:i') : 'N/A' }}</td>
          <td>{{ $category->updated_at ? $category->updated_at->format('Y-m-d H:i') : 'N/A' }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
