<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management</title>
    <link rel="stylesheet" href="{{ asset('css/inventory.css') }}">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container">
      <!-- Inventory Box -->
      <div class="inventory-box">
        <!-- Header with title & add button -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="inventory-title">📦 Inventory Management</h3>
          <button class="btn btn-add">+ Add Item</button>
        </div>

        <!-- Inventory Table -->
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
              <tr>
                <td>Electronics</td>
                <td>Product A</td>
                <td>$99.99</td>
                <td>25</td>
                <td>
                  <button class="btn btn-edit">Edit</button>
                  <button class="btn btn-delete">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Clothing</td>
                <td>T-Shirt</td>
                <td>$19.99</td>
                <td>50</td>
                <td>
                  <button class="btn btn-edit">Edit</button>
                  <button class="btn btn-delete">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
