<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('/assets/images/Milkyway.jpeg');">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>
      <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email"
            class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password"
            class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-blue-500 focus:border-blue-500" required>
        </div>
        <div class="flex items-center">
          <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
          <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
        </div>
        <button type="submit" class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600">Sign In</button>
      </form>
    </div>
  </body>
</html>