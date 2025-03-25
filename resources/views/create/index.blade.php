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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <title>Create</title>
  </head>
 
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="card shadow">
          <div class="card-body">
            <button class="btn btn-primary mb-3">Back</button>
 
            <form class="row g-3">
              <div class="col-12 d-flex align-items-center">
                <label for="categorySelect" class="form-label me-2"
                  >Categories:</label
                >
                <select id="categorySelect" class="form-select flex-grow-1">
                  <option selected>Select Category</option>
                  <option>no1</option>
                  <option>no2</option>
                </select>
              </div>
 
              <div class="col-12 d-flex align-items-center">
                <label for="itemName" class="form-label me-2">Item Name:</label>
                <input
                  type="text"
                  class="form-control flex-grow-1"
                  id="itemName"
                />
              </div>
 
              <div class="col-12 d-flex align-items-center">
                <label for="price" class="form-label me-2">Price:</label>
                <input
                  type="number"
                  class="form-control flex-grow-1"
                  id="price"
                />
              </div>
 
              <div class="col-12 d-flex align-items-center">
                <label for="qty" class="form-label me-2">Qty:</label>
                <input
                  type="number"
                  class="form-control flex-grow-1"
                  id="qty"
                />
              </div>
 
              <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <style>
    body {
 
 
 
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f8f9fa;
    }
 
    .card {
      width: 100%;
      max-width: 400px;
    }
  </style>
</html>