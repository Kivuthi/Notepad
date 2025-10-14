<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
      Create an Account
    </h2>

    <form action="{{ route('auth.registerPost') }}" method="POST" class="space-y-5">
      @csrf

      @if ($errors->any()) 


        @foreach ($errors->all() as $error)

        <p class="text-red-600">{{ $error }}</p>
            
        @endforeach
      @endif

      @if (session('error'))


      <p class="text-red-600">{{ session('error') }}</p>
      @endif

      <!-- Full Name -->
      <div>
        <label for="name" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Full Name</label>
        <input id="name" name="name" type="text" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Email Address</label>
        <input id="email" name="email" type="email" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Phone Number -->
      <div>
        <label for="phone" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Phone Number</label>
        <input id="phone" name="phone" type="text" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Password</label>
        <input id="password" name="password" type="password" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block font-semibold mb-1 text-gray-700 dark:text-gray-300">Confirm Password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" 
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg transition">
          Register
        </button>
      </div>

      <!-- Login Link -->
      <p class="text-center text-sm text-gray-600 dark:text-gray-400">
        Already have an account? 
        <a href="{{ route('auth.login') }}" class="text-red-600 hover:text-red-500 font-semibold">Login here</a>
      </p>
    </form>
  </div>
</section>
</body>
</html>
