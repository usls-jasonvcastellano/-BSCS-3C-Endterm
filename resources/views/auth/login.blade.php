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
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="resources\css\login.css" />
  </head>

  <body>
    <div class="container">
      <form method="POST" action="/login">
        <h1>Login</h1>

        <div class="input-box">
          <input type="text" placeholder="Username" required />
        </div>

        <div class="input-box">
          <input type="Password" placeholder="Password" required />
        </div>

        <div class="remember-forgot">
          <label><input type="checkbox" /> Remember me </label>
        </div>

        <div><button type="submit" class="btn btn-primary">Login</button></div>

        <div class="register-link">
          <p>
            Don't have an account?
            <a href="/register">Register</a>
          </p>
        </div>
      </form>
    </div>
  </body>
</html>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url("{{ asset('img/login.jpg') }}") no-repeat;
    background-size: cover;
  }

  .container {
    width: 400px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(5px);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
  }

  .container h1 {
    font-size: 36px;
    text-align: center;
  }

  .container .input-box {
    width: 100%;
    height: 40px;
    margin: 30px 0px;
  }

  .input-box input {
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 20px;
  }

  .input-box input::placeholder {
    color: #fff;
  }

  .container .remember-forgot {
    display: flex;
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0px 15px;
  }

  .container .btn {
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: bold;
  }

  .container .register-link {
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
  }

  .register-link p a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
  }

  .register-link p a:hover {
    text-decoration: underline;
  }
</style>
