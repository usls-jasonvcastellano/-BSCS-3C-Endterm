@extends('template.main')


@section('content')

<div class="container">
    <a href="http://127.0.0.1:8000/create" class="btn btn-success btn=sm" >Add Inventory</a>
    <h2 class="mb-4">Categories List</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->category_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<style>
    .container {
        border: 1px solid black;
        padding: 20px 20px;
        border-radius: 10px;
        backdrop-filter: blur(20px);
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
        color: black;
    }
</style>
@endsection

