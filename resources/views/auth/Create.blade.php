<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <button class="btn btn-info btn-sm">Back</button>
    <form>
      <div class="inside">
        <div class="row mb-3">
          <p class="col-sm-6 col-form-label">Category:</p>
          <div class="col-sm-6">
            <div class="dropdown">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Select Category
              </button>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item active" href="#">Category1</a>
                </li>
                <li><a class="dropdown-item" href="#">Category2</a></li>
                <li>
                  <a class="dropdown-item" href="#">Category3</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <p class="col-sm-6 col-form-label">Item Name:</p>
          <div class="col-sm-6">
            <input type="text" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <p class="col-sm-6 col-form-label">Price:</p>
          <div class="col-sm-3">
            <input type="number" class="form-control" />
          </div>
        </div>
        <div class="row mb-3">
          <p class="col-sm-6 col-form-label">Qty:</p>
          <div class="col-sm-3">
            <input type="number" class="form-control" />
          </div>
        </div>
      </div>
    </form>
    <div class="row mb-3">
      <p class="col-sm-6 col-form-label"></p>
      <div class="col-sm-3">
        <button class="btn btn-info btn-sm">Submit</button>
      </div>
    </div>
  </div>
</body>

</html>

<style>
  .container {
    width: auto;
    background: transparent;
    border: 1px solid black;
    padding: 20px 20px;
    border-radius: 10px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
    color: black;
  }

  body {
    background: url("bg.jpg") no-repeat;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .inside {
    padding: 30px 50px;
    font-size: 18px;
  }

  .btn {
    background-color: blue;
    color: white;
    font-size: 18px;
    padding: 5px 15px;
  }

  .form-control {
    border: 1px solid black;
  }

  .container .inside .dropdown button {
    background-color: white;
    color: black;
  }
</style>