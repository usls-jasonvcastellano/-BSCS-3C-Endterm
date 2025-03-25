@extends('template.main')

@section('content')
<div class="container">
    <h2 class="mb-4">Categories List</h2>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>

            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection