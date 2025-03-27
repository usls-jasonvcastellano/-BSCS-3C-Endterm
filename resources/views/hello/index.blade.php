<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory Management</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center mb-4">Inventory Management</h2>

      <!-- Add Item Button -->
      <div class="text-end mb-3">
        <button
          class="btn btn-success"
          data-bs-toggle="modal"
          data-bs-target="#addItemModal"
        >
          Add Item
        </button>
      </div>

      <!-- Inventory Table -->
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>Item ID</th>
              <th>Item Name</th>
              <th>Quantity</th>
              <th>Price</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody id="inventoryTableBody">
            <!-- Items will be dynamically added here -->
          </tbody>
        </table>
      </div>
    </div>

    <!-- Add Item Modal -->
    <div
      class="modal fade"
      id="addItemModal"
      tabindex="-1"
      aria-labelledby="addItemModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addItemModalLabel">Add New Item</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="addItemForm">
              <div class="mb-3">
                <label for="itemName" class="form-label">Item Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="itemName"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="itemQuantity" class="form-label">Quantity</label>
                <input
                  type="number"
                  class="form-control"
                  id="itemQuantity"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="itemPrice" class="form-label">Price</label>
                <input
                  type="text"
                  class="form-control"
                  id="itemPrice"
                  required
                />
              </div>
              <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Inventory Data (Temporary for Demo)
      let inventory = [];

      // Function to Render Inventory Table
      function renderInventoryTable() {
        const tableBody = document.getElementById("inventoryTableBody");
        tableBody.innerHTML = "";

        inventory.forEach((item, index) => {
          tableBody.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${item.name}</td>
                        <td>${item.quantity}</td>
                        <td>$${item.price}</td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="deleteItem(${index})">Delete</button>
                        </td>
                    </tr>
                `;
        });
      }

      // Add Item Function
      document
        .getElementById("addItemForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();

          const itemName = document.getElementById("itemName").value;
          const itemQuantity = document.getElementById("itemQuantity").value;
          const itemPrice = document.getElementById("itemPrice").value;

          inventory.push({
            name: itemName,
            quantity: itemQuantity,
            price: itemPrice,
          });

          // Clear Form Fields
          document.getElementById("addItemForm").reset();

          // Close Modal
          var addItemModal = new bootstrap.Modal(
            document.getElementById("addItemModal")
          );
          addItemModal.hide();

          // Re-render Table
          renderInventoryTable();
        });

      // Delete Item Function
      function deleteItem(index) {
        inventory.splice(index, 1);
        renderInventoryTable();
      }
    </script>
  </body>
</html>
