<!DOCTYPE html>
<html lang="en">

<head style = "font-family: 'Poppins', sans-serif;">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Login  </title>

    <style>

    .button {
    background-color:rgb(0, 0, 0); 
    color: white;
    font-size: 14px;
    cursor: pointer;     

    </style>
    
    <h5 class = "mt-2" style = "text-align: center; font-family: 'Courier New', Courier, monospace; font-size: small; text-decoration: dotted;" > free international shipping on orders $150+ USD. free returns always.</h5>

    <div class = "d-flex justify-content-center mt-2" style = "width: 100  %; font-size: 8;">
        <div class = "container rounded-3" style = "background-color: rgb(255, 254, 254); width: 90%; height: 40px; color: black;">
            

                <ul class = "nav nav-tabs card-header-tabs justify-content-center">

                    <li class = "nav-item">
                        <a class = "nav-link disabled" aria-current="true" href = "#"> R.E.M BEAUTY </a>
                    </li>

                    <li class = "nav-item">
                        <a class = "nav-link disabled" aria-current="true" href = "#"> NEW COLLECTION </a>
                    </li>

                    <li class = "nav-item">
                        <a class = "nav-link disabled" href = "#"> LOG IN </a>
                    </li>

                    <li class = "nav-item">
                        <a class = "nav-link disabled" aria-current="true" href = "#"> CATALOG </a>
                    </li>

                    <li class= "nav-item">
                        <a class = "nav-link disabled" aria-disabled = "true"> BEST SELLERS </a>
                    </li>

                </ul>
            </div>
        </div>  
    </div>
</head>


<body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);">

   <form method = "POST" action ="/login">
    @csrf()

    <div class="container-xxl d-flex justify-content-center align-items-center ps-5 rounded-3 mt-2"
        style="width: 50; background-color: white; height: 85vh;  ">


        <div class="container-xxl justify-content-start ps-5">

            <div class="col-4 text-left ms-5" style="height: 200px; width: 28%;>
        <div class = " card-header fs-3 custom-margin-top">

                <div class="Customer-formTitle fs-2"> LOGIN </div>

                <div class="mt-2">
                    <input type="text" placeholder="  username" class="form-control rounded-5"
                        style="font-size: small; height: 40px;" />
                </div>

                <div class="mt-2">
                    <input type="password" placeholder="  password" class="form-control rounded-5"
                        style="font-size: small; height: 40px;" />
                </div>

                <div class="mt-3 text-end">
                    <p> <a style="text-decoration: underline;"> FORGOT PASSWORD? </a></p>
                </div>

                <div class="container text-center mt-3">
                    <button class="btn btn-md btn-light button rounded-5"
                        style="font-weight: bold; height: 50px; width: 100%;"> SIGN IN </button>
                </div>

                <div class="mt-3">
                    <p style="color: gray; font-size: medium;">
                        Don't have an account? <a style=" text-decoration: underline; color: black;"> CREATE ACCOUNT</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</form>

</div>

</body>

</html>