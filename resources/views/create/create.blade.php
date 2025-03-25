<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/createStyle.css">
</head>

<body>
  <div class="container">
    <div class="formCenter">
      <div class="formBorder">
        <form>
          <button type="submit" class="btn btn-back mb-3">Back</button>
          <h1 class="welcome text-center">Welcome!</h1>
          <div class="mb-3">
            <label for="categorySelect" class="form-label">Categories:</label>
            <select class="form-select" id="categorySelect">
              <option selected>Choose a category</option>
              <option value="1">Tools</option>
              <option value="2">Materials</option>
              <option value="3">Wood</option>
              <option value="4">Paint</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Item Name:</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Price:</label>
            <input type="number" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Quantity:</label>
            <input type="number" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="row">
            <div class="col text-end">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>