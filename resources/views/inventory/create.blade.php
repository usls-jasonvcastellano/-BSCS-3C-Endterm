<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <style>
        .center {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .center label {
            width: 30%;
        }

        .center.form-control {
            width: 100%;
        }

        .categories {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .star {
            background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ-oySYdDP8r464wb8VPxVKm746dL5rtJ1fQ&s");
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .box {
            background-image: url("https://www.instyle.com/thmb/DseYhtHWdMJFTJ-rA8STH8abw_I=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/110521-ariana-grande-rem-beauty-social-2000-589ac6b9500e4696b443faa6620abd6c.jpg");
            background-size: cover;
 
        }

        .left {
            margin-top: 330px;
            margin-left: 130px;
            position: absolute;
        }

        .right {
            margin-top: 80px;
            margin-left: 600px;
            position: absolute;
        }

        .brand {
            width: 400px;
            height: 200px;
            padding: 20px;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

            margin-top: 80px;
            margin-left: 130px;
            position: absolute;
        }

        .cards {
            width: 800px;
            height: 600px;
            padding: 20px;
            border-radius: 12px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body style="font-family: 'Poppins', sans-serif; background-color: rgba(238, 240, 240, 0.99);" class="star">

    <div class = "container card brand box" > <br> <br> <br>
        
    </div>

    <div class="container card left" style="width: 25rem">
        <div class="container">
            <br />
            <button class="btn btn-md btn-dark mb-3">Back</button>

            <div class="mb-3 categories">
                <label for="exampleFormControlInput1" class="form-label">Categories:
                </label>
                <button class="btn btn-light dropdown-toggle categories ms-4" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Select Category
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> Powders </a></li>
                </ul>
            </div>

            <div class="mb-3 center">
                <div class="col-auto">Item Name:</div>
                <div class="col-auto">
                    <input type="text" class="form-control" />
                </div>
            </div>

            <div class="mb-3 center">
                <div class="col-auto">Price:</div>
                <div class="col-auto">
                    <input type="text" class="form-control" />
                </div>
            </div>

            <div class="mb-3 center">
                <div class="col-auto">Quantity:</div>
                <div class="col-auto">
                    <input type="text" class="form-control" />
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-md btn-dark">Submit</button>
        </div>
    </div>
    </div>

    <div class = "container cards right">


        <div class="container-xxl rounded-3 mt-2" style="background-color: white; height: 35vh;  ">

            <div class="col-4 text-left ms-5" style="height: 200px; width: 28;>
        <div class = "card-header fs-3
                custom-margin-top">
                <br><br><br><br>

                <p> home / inventory
                <p>
                <h1> INVENTORY LIST <h1>
                        <div class = "btn btn-dark"> Add Inventory </div>


            </div>
        </div>

        <div class="container  ps-5 rounded-3 mt-2" style="width: 50; background-color: white;">
            <table class="table">
                <br><br>
                <thead>
                    <tr>
                        <th scope="col">Category</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Qty</th>
                        <th scope="col"> Price </th>
                        <th scope="col"> Action </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Perfume</td>
                        <td>Cloud by AG</td>
                        <td>20</td>
                        <td>80000</td>
                        <td>
                            <div class = "btn btn-light"> Edit </div>
                            <div class = "btn btn-dark"> Delete </div>
                        </td>

                    </tr>
                    <tr>
                        <td>Serum</td>
                        <td>Dreamglow Highlight</td>
                        <td>15</td>
                        <td>16500</td>
                        <td>
                            <div class = "btn btn-light"> Edit </div>
                            <div class = "btn btn-dark"> Delete </div>
                        </td>

                    </tr>

                </tbody>
            </table>

        </div>
    </div>
    </div>

    </div>

</body>

</html>
