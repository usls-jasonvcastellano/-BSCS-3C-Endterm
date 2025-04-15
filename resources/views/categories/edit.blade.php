<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <title>Edit Category</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="card col-md-8 p-4">
          <div class="card-body">

            <a class="btn btn-primary mb-3" href="/categories">BACK</a>

            <h3 class="mb-4 text-center">Edit Category</h3>

            <form action="/categories/{{ $category->id }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="category_name" class="form-label">Category Name</label>
                <input
                  type="text"
                  name="category_name"
                  id="category_name"
                  class="form-control"
                  value="{{ old('category_name', $category->category_name) }}"
                  placeholder="Enter category name"
                  required
                />
              </div>

              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                  name="description"
                  id="description"
                  class="form-control"
                  placeholder="Enter description"
                >{{ old('description', $category->description) }}</textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-success">Update Category</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script
