@extends("components.pages")

@section('content')

<section class="bg-gray-900 dark:bg-gray-950 text-gray-100 py-16 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">

    <!-- Left Side Image -->
    <div class="w-full md:w-1/2">
      <img src="{{ asset('images/import.jpg') }}" 
           alt="Import"
           class="rounded-2xl w-full object-cover shadow-lg">
    </div>

    <!-- Right Side Text -->
    <div class="w-full md:w-1/2">
      <h1 class="text-3xl md:text-4xl font-extrabold mb-4">CAR IMPORT PROCEDURE</h1>
      <div class="text-sm mb-4">
        <a href="{{ route('pages.index') }}" class="text-red-500 hover:underline">Home</a>
        <span class="text-gray-400"> / Import Vehicles</span>
      </div>

      <p class="text-gray-300 leading-relaxed mb-6">
        Import your vehicle with <span class="font-semibold text-white">Ratiah Co</span> 
       your Experienced patner.
       <br><br>
       Let us help you ship your dream car. We handle everything from Procuring the vehicles from our dealers,
       vehicle inspection to shipping to the port of Mombasa, clearing, registration and forwarding to you.
        <br><br>
        Secure, fast, and easy — fill in the form or Contact Us now to continue your journey with us.
      </p>

      <a href="#login-form" 
         class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition">
        Go to Login
      </a>
    </div>

  </div>
</section>

@endsection