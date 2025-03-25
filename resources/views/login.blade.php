<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <title>Login</title>
    <link rel="stylesheet" href="styles.css" />

</head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <div class="container" id="box">
      <div class="container" id="box2">
        <div class="row">
          <div class="column">
            <button type="button" class="btn btn-primary" id="Button1">
              Back
            </button>
          </div>
        </div>

        <div class="row">
          <div id="Category_Text">Category</div>
          <div class="column">
            <div class="btn-group" id="Category">
              <button
                type="button"
                class="btn btn-secondary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Select Category
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <button class="dropdown-item" type="button">Action</button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Another action
                  </button>
                </li>
                <li>
                  <button class="dropdown-item" type="button">
                    Something else here
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label"
                >Item Name</label
              >
            </div>
            <div class="col-auto" id="Name_Field">
              <input type="password" id="inputPassword" class="form-control" />
            </div>
          </div>
        </div>

        <div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label"
                >Quantity</label
              >
            </div>
            <div class="col-auto" id="Quantity_Field">
              <input type="password" id="inputPassword" class="form-control" />
            </div>
          </div>
        </div>

        <div>
          <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label">Price</label>
            </div>
            <div class="col-auto" id="Price_Field">
              <input type="password" id="inputPassword" class="form-control" />
            </div>
          </div>
        </div>
        <div class="vertical-center">
          <button type="button" class="btn btn-primary" id="Submit_Button">
            Submit
          </button>
        </div>
      </div>
    </div>
  </body>

  <style>
   
   #h1 {
     text-decoration: underline;
   }
   
   #box {
     position: relative;
     text-align: center;
     margin-top: 300px !important;
     border: 1px solid black;
     max-width: 400px;
     border-radius: 10px;
   }
   
   #box2 {
     margin-top: 10px;
   }
   
   #Name_Field {
     position: relative;
     text-align: center;
     margin-top: 20px;
     margin-bottom: 10px;
   }
   
   #Quantity_Field {
     position: relative;
     text-align: center;
     margin-left: 18px;
     margin-top: 15px;
     margin-bottom: 10px;
   }
   
   #Price_Field {
     position: relative;
     text-align: center;
     margin-left: 43px;
     margin-top: 15px;
     margin-bottom: 10px;
   }
   
   #Button1 {
     float: left;
     margin-left: 15px;
     margin-bottom: 10px;
     background-color: black;
   }
   
   .btn-group {
     margin-left: 45px;
     background-color: black;
     border-radius: 10px;
   }
   
   #Category_Text {
     margin-left: 15px;
     margin-top: 5px;
   }
   
   #Submit {
     position: relative;
     text-align: center;
     margin-bottom: 10px;
   }
   
   .vertical-center {
     margin-bottom: 10px;
   }
   
   #Submit_Button {
     background-color: black;
   }
   </style>   

</html>