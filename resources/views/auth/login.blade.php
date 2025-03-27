<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="font-poppins ">

<div class="relative min-h-screen bg-white">
  <!-- Left Side Background -->
  <div class="absolute top-0 left-0 h-full w-1/5 bg-cover bg-center" style="background-image: url('your-image.jpg');"></div>

  <!-- Right Side Background -->
  <div class="absolute top-0 right-0 h-full w-1/5 bg-cover bg-center" style="background-image: url('your-image.jpg');"></div>

  <!-- Main Content -->
  <div class="relative z-10 mx-auto w-3/5 p-8">
    <div class="md:flex md:h-screen">
    <div class="relative w-3/10 container w-[90%] mx-auto mt-32  flex items-center justify-center md:mt-0 z-10">
    <div class="card bg-white border border-black border-light-gray shadow p-5 rounded-lg min-w-[200px] w-full max-w-[550px] md:mx-4 md:border-none md:shadow-none">
        <form method="POST" action='/login' > 
                @csrf()
            <h2 class="text-2xl font-extralight py-6">Welcome !</h2>
            <h1 class="text-4xl font-regular py-2 mb-6">Sign in to</h2>

            <div class="">
                <label class="block mb-2" for="exampleInputEmail1">Username or email</label>
                <input type="email" class="w-full py-4 px-2 border border-dark-gray rounded-md mb-8" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
                <label class="block mb-2" for="InputPassword1">Password</label>
                <input type="password" class="w-full py-4 px-2 border border-dark-gray rounded-md mb-8" id="exampleInputPassword1" placeholder="Password">
                
                
            </div>

            <button type="submit" class="btn w-full py-4 bg-black text-white font-medium text-lg rounded-md hover:bg-darker-gray">Login</button>
        </form>
    </div>

</div>
<div class="absolute top-0 inset-0 z-0 w-7/10 h-64 w-full md:static md:block md:p-4 md:h-full"><img src="{{ asset('img/login.jpg') }}" class="w-full h-full object-cover rounded-lg" /></div>
</div>
  </div>
</div>



</body>
</html>