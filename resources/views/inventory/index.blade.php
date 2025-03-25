<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title text-center mb-4">Add Item</h3>
              <form>
                <div class="mb-3">
                  <label for="categorySelect" class="form-label">Categories:</label>
                  <select class="form-control" id="categorySelect">
                    <option value="">Select Category</option>
                    <!-- Add your category options here -->
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="itemName" class="form-label">Item Name:</label>
                  <input type="text" class="form-control" id="itemName" placeholder="Enter item name">
                </div>

                <div class="mb-3">
                  <label for="itemPrice" class="form-label">Price:</label>
                  <input type="text" class="form-control" id="itemPrice" placeholder="Enter price">
                </div>

                <div class="mb-3">
                  <label for="itemQty" class="form-label">Quantity:</label>
                  <input type="text" class="form-control" id="itemQty" placeholder="Enter quantity">
                </div>

                <div class="d-flex justify-content-between">
                  <button class="btn btn-secondary" type="button">Back</button>
                  <button class="btn btn-primary" type="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
