<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Responsive Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body class="d-flex align-items-center justify-content-center vh-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5 col-xl-4">
          <div class="card p-4 shadow">
            <h3 class="text-center mb-3">Login</h3>
            <form>
              <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter your email"
                />
              </div>
              <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Enter your password"
                />
              </div>
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
