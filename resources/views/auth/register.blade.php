<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>

<body>

    <div class="container">
        <h1>Register</h1>
        <form>

            <div class="input-box">
                <input type="text" placeholder="Full name" required>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <input type="text" placeholder="Username" required>
            </div>

            <div class="input-box">
                <input type="Password" placeholder="Password" required>
            </div>

            <div class="input-box">
                <input type="date" placeholder="birthday" required>
            </div>



            <div><button type="submit" class="btn btn-primary">Register</button></div>



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
    }

    .container {
        width: 400px;
        background: transparent;
        border: 2px solid rgba(255, 255, 255, .2);
        backdrop-filter: blur(5px);
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        color: black;
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
        outline: none;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, .2);
        border-radius: 40px;
        font-size: 16px;
        color: black;
        padding: 20px 20px;
    }

    .input-box input::placeholder {
        color: #black;
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
        box-shadow: 0 0 10px rgba(0, 0, 0, .1);
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
        text-decoration: none;
        font-weight: 600;
    }

    .register-link p a:hover {
        text-decoration: underline;
    }
</style>