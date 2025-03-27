<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 350px">
      <div class="row">
        <button class="btn btn-primary mb-3 col-4">BACK</button>

          <div class="mb-3">
            <label class="form-label">Categories:</label>
            <select class="form-select">
              <option selected>Select Category</option>
              <option value="1">Category 1</option>
              <option value="2">Category 2</option>
              <option value="3">Category 3</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Item Name:</label>
            <input type="text" class="form-control" />
          </div>

          <div class="mb-3 col-4">
            <label class="form-label">Price:</label>
            <input type="number" class="form-control" />
            <label class="form-label">Qty:</label>
            <input type="number" class="form-control" />
          </div>

          <button class="btn btn-primary w-100">Submit</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
