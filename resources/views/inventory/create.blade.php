<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Inventory</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg-light">
    <div class="container mt-5">
      <h2 class="text-center mb-4">Add New Item</h2>

      <!-- Add Item Form -->
      <form class="container mt-4">
        <div class="mb-3">
          <label for="itemName" class="form-label">Item Name</label>
          <input
            type="text"
            class="form-control"
            id="itemName"
            placeholder="Enter item name"
          />
        </div>
        <div class="mb-3">
          <label for="itemPrice" class="form-label">Price</label>
          <input
            type="number"
            class="form-control"
            id="itemPrice"
            placeholder="Enter price"
          />
        </div>
        <button type="submit" class="btn btn-primary">Add Item</button>
      </form>
      <!-- End Add Item Form -->

      <h2 class="text-center mt-5 mb-4">Inventory</h2>

      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Stock</th>
              <th>Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Sample Product</td>
              <td>Electronics</td>
              <td>50</td>
              <td>$199</td>
              <td>
                <button class="btn btn-primary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Another Product</td>
              <td>Clothing</td>
              <td>100</td>
              <td>$49</td>
              <td>
                <button class="btn btn-primary btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
