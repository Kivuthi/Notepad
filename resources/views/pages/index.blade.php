@extends('components.pages')

@section('content')

<section class="relative w-full h-[75vh] overflow-hidden">
  <!-- Slides -->
  <div id="carousel" class="relative w-full h-full">
    <!-- Slide 1 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-100"
      style="background-image: url('{{ asset('images/one.png') }}');"
    >
      <div class="absolute inset-0 bg-black/60"></div>
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3">West-Side Co.</h1>
        <p class="text-lg md:text-xl mb-5">Your Premier Automotive Marketplace</p>
        <a href="#"
          class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
          Browse Cars
        </a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0"
      style="background-image: url('{{ asset('images/two.png') }}');"
    >
      <div class="absolute inset-0 bg-black/60"></div>
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Luxury & Performance</h1>
        <p class="text-lg md:text-xl mb-5">Find premium rides from trusted dealers.</p>
        <a href="#"
          class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
          Explore Now
        </a>
      </div>
    </div>

    <!-- Slide 3 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0"
      style="background-image: url('{{ asset('images/three.png') }}');"
    >
      <div class="absolute inset-0 bg-black/60"></div>
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Drive Your Dream</h1>
        <p class="text-lg md:text-xl mb-5">From local classics to imported icons.</p>
        <a href="#"
          class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
          Get Started
        </a>
      </div>
    </div>

    <!-- Slide 4 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0"
      style="background-image: url('{{ asset('images/four.png') }}');"
    >
      <div class="absolute inset-0 bg-black/60"></div>
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Trusted Dealers Only</h1>
        <p class="text-lg md:text-xl mb-5">Buy and sell with complete confidence.</p>
        <a href="#"
          class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
          Join Now
        </a>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button id="prevSlide"
    class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
  </button>

  <button id="nextSlide"
    class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
  </button>
</section>


<script src="{{ asset('js/carousel.js') }}"></script>

@endsection