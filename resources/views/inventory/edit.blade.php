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
    <title>Edit Item</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="card col-md-8 p-4">
          <div class="card-body">

            <a class="btn btn-primary mb-3" href="/inventory">BACK</a>

            <h3 class="mb-4 text-center">Edit Inventory Item</h3>

            <form action="/inventory/{{ $item->id }}" method="POST">
              @csrf
              @method("PUT")

              <div class="mb-3">
                <label for="category_id" class="form-label">Category:</label>
                <select name="category_id" class="form-select" required>
                  <option value=""> Select Category </option>
                  @foreach($categories as $id => $name)
                      <option value="{{ $id }}">
                          {{ $name }}
                      </option>
                  @endforeach


                </select>
              </div>

              <div class="mb-3">
                <label for="itemname" class="form-label">Item Name:</label>
                <input
                  type="text"
                  name="itemname"
                  id="itemname"
                  class="form-control"
                  value="{{ old('itemname', $item->item_name) }}"
                  placeholder="Item Name"
                  required
                />
              </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input
                  type="number"
                  name="price"
                  id="price"
                  class="form-control"
                  step="0.01"
                  value="{{ old('price', $item->price) }}"
                  placeholder="Enter price"
                  required
                />
              </div>

              

              <div class="text-center">
                <button type="submit" class="btn btn-success">Update Item</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
