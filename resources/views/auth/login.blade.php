<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
     @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    {{-- <script src="https://kit.fontawesome.com/a2d9b6ad95.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/header.js') }}"></script>
</head>
<body>
    <section class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-950 py-10 px-6">
  <div class="max-w-md w-full bg-white dark:bg-gray-900 rounded-2xl shadow-xl p-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-100 mb-6">
      Welcome Back
    </h2>

    <form action="{{ route('auth.login') }}" method="POST" class="space-y-5">
      @csrf

      @if (session("success"))

      <p class="text-green-700">{{ session("success") }}</p>
      @endif
      <!-- Email -->
      <div>
        <label for="email" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Email Address</label>
        <input id="email" name="email" type="email" required autofocus
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Password</label>
        <input id="password" name="password" type="password" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Remember Me -->
      <div class="flex items-center justify-between">
        <label class="flex items-center text-sm text-gray-600 dark:text-gray-400">
          <input type="checkbox" name="remember" class="mr-2 rounded border-gray-400 dark:border-gray-600">
          Remember me
        </label>
        <a href="#" class="text-red-600 hover:text-red-500 text-sm font-semibold">Forgot Password?</a>
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" 
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg transition">
          Login
        </button>
      </div>

      <!-- Register Link -->
      <p class="text-center text-sm text-gray-600 dark:text-gray-400">
        Don’t have an account? 
        <a href="{{ route('auth.register') }}" class="text-red-600 hover:text-red-500 font-semibold">Register here</a>
      </p>
    </form>
  </div>
</section>

</body>
</html>