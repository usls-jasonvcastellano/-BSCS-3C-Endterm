<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('login_style.css') }}" />
    <title>Document</title>
</head>

<body>
    <div class = "main-body">
        <div class = "header">
            <h1>Login Page</h1>
        </div>

        <form method = "$GET" action="/login">
        @csrf
        <div class = "form-container">
            <div class = "form-group">
                <label for="inputEmail" class = "form-label">Email</label>
                <input type="email" class = "form-control" id = "inputEmail" name = "email" placeholder = "123@gmail.com" required/>
            </div>
            
            <div class = "form-group">
                <label for="inputPassword" class = "form-label">Password</label>
                <input type="password" class = "form-control" id = "inputPassword" name = "password" placeholder = "******" required />
            </div>

            <div class = "center-button">
                <button type = "submit" class = "btn">Sign in</button>

            </div>
        </div>
        </form>

    </div>
    
</body>
</html>
