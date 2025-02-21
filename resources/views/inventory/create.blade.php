<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Styled Form</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
  </head>

  <body>
    <div class="container mt-5 d-flex justify-content-center">
      <div class="form-box">
        <h4 class="text-center mb-4">Item Form</h4>
        <form>
          <!-- Form 1: Categories Dropdown -->
          <div class="mb-3">
            <label for="categories" class="form-label">Categories:</label>
            <select class="form-select" id="categories">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <!-- Form 2: Item Name Input -->
          <div class="mb-3">
            <label for="item-name" class="form-label">Item Name:</label>
            <input
              type="text"
              class="form-control"
              id="item-name"
              name="item-name"
              placeholder="Enter item name"
            />
          </div>

          <!-- Form 3: Price Input -->
          <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input
              type="number"
              class="form-control"
              id="price"
              name="price"
              placeholder="Enter price"
            />
          </div>

          <!-- Form 4: Quantity Input -->
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity:</label>
            <input
              type="number"
              class="form-control"
              id="quantity"
              name="quantity"
              placeholder="Enter quantity"
            />
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
