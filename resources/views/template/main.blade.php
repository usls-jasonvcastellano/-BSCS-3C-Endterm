<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
         crossorigin="anonymous"></script>
 </head>
 
 <body>
     <div class="container">
         <br /><br />
         <div class="row">
             <div class="card">
                 <div class="card-body">
                     <button class="btn btn-success btn=sm">Add Inventory</button>
                     <table class="table">
                         <thead>
                             <tr>
                                 <th scope="col">Category</th>
                                 <th scope="col">Description</th>
                                 <th scope="col">Action</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($categories as $category)
                                 <tr>
                                     <td> {{$category->name}}</td>
                                     <td> {{$category->description}}</td>
                                     <td>
                                         <button class="btn btn-info btn=sm">Edit</button>
                                         <button class="btn btn-danger btn=sm">Delete</button>
                                     </td>
                                 </tr>
 
                             @endforeach
 
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </body>
 
 </html>
 <style>
     .card {
         border: 1px solid black;
         padding: 20px 20px;
         border-radius: 10px;
         backdrop-filter: blur(20px);
         box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
         color: black;
     }
 </style>