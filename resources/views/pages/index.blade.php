@extends('components.pages')

@section('content')

<section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen h-[100vh] overflow-hidden">
  <!-- Slides -->
  <div id="carousel" class="relative w-full h-full">
    <!-- Slide 1 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center bg-no-repeat flex items-center justify-center transition-opacity duration-1000 opacity-100"
      style="background-image: url('{{ asset('images/one.png') }}');"
    >
      <div class="absolute inset-0 bg-black/60"></div>
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-3">Ratiah Co.</h1>
        <p class="text-lg md:text-xl mb-5">Your Premier Automotive Marketplace</p>
        <a href="#"
          class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition">
          Browse Cars
        </a>
      </div>
    </div>

    <!-- Slide 2 -->
    <div
      class="slide absolute inset-0 bg-cover bg-no-repeat bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0"
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
      class="slide absolute inset-0 bg-cover bg-no-repeat bg-center flex items-center justify-center transition-opacity duration-1000 opacity-0"
      style="background-image: url('{{ asset('images/wrangler.avif') }}');"
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
      class="slide absolute inset-0 bg-cover bg-center bg-no-repeat flex items-center justify-center transition-opacity duration-1000 opacity-0"
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

<section class="w-full px-4 md:px-8 py-6 bg-gray-50 flex flex-col items-center">
  <div class="w-full max-w-5xl bg-white shadow-md rounded-2xl p-4 md:p-6">
    <!-- Search Input + Category Tabs -->
    <div class="flex flex-col md:flex-row items-center md:space-x-4 space-y-3 md:space-y-0">
      <!-- Search input -->
      <div class="flex-1 w-full">
        <input
          type="text"
          placeholder="Search by brand, model, or keyword..."
          class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-orange-500 focus:outline-none"
        />
      </div>

      <!-- Category Tabs -->
      <div class="flex flex-row space-x-2">
        <button class="px-4 py-2 rounded-lg bg-blue-900 text-white font-semibold">All Vehicles</button>
        <button class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">Cars</button>
        <button class="px-4 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100">Bikes</button>
      </div>

      <!-- Search + Filter Buttons -->
      <div class="flex flex-row space-x-2">
        <button
          class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-5 py-2 rounded-lg flex items-center justify-center space-x-2"
        >
          <span>Search</span>
        </button>
        <button
          id="filterToggle"
          class="border border-gray-300 hover:bg-gray-100 text-gray-700 px-4 py-2 rounded-lg flex items-center justify-center"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-.293.707L15 13.414V19a1 1 0 01-.553.894l-4 2A1 1 0 019 21v-7.586L3.293 6.707A1 1 0 013 6V4z" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Filter Accordion (Hidden by default) -->
    <div id="filterCard" class="hidden mt-4 border-t border-gray-200 pt-4">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <!-- Example Filter: Price -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Price Range</label>
          <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:outline-none">
            <option>Any</option>
            <option>Under 500K</option>
            <option>500K - 1M</option>
            <option>1M - 2M</option>
            <option>2M - 3M</option>
            <option>3M - 5M</option>
            <option>5M - 10M</option>
            <option>Above 10M</option>
          </select>
        </div>

        <!-- Example Filter: Type -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle Type</label>
          <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:outline-none">
            <option>All</option>
            <option>Convertible</option>
            <option>Coupe</option>
            <option>Minivan</option>
            <option>MPV</option>
            <option>Sport-utility vehicle</option>
            <option>Hybrid</option>   
            <option>Ute(pick-up truck)</option>
            <option>Hatchback</option>
            <option>Sedan</option>
            <option>Station Wagon</option>
            <option>Pickup Trucks</option>
            <option>Estates</option>
            <option>Off-road vehicle</option>
            <option>Coupé and convertible</option>
            <option>SUV</option>
            <option>Sports car</option>
            <option>Crossover</option>
            <option>Luxury</option>
          </select>
        </div>

        <!-- Example Filter: Year -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Year</label>
          <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:outline-none">
            <option>Any</option>
            <option>2025</option>
            <option>2024</option>
            <option>2023</option>
            <option>2022</option>
            <option>2021</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
            <option>2017</option>
            <option>2016</option>
            <option>2015</option>
            <option>2014</option>
            <option>2013</option>
            <option>2012</option>
            <option>2011</option>
            <option>2010</option>
          </select>
        </div>
      </div>

      <!-- Apply Button -->
      <div class="mt-4 text-right">
        <button class="bg-blue-900 text-white px-6 py-2 rounded-lg hover:bg-blue-800">Apply Filters</button>
      </div>
    </div>
  </div>

  <!-- Popular Tags -->
  <div class="flex flex-wrap justify-center mt-5 gap-3 text-sm">
    <span class="text-gray-500">Popular:</span>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">Luxury Cars</button>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">SUVs</button>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">Electric</button>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">Under $20k</button>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">New Arrivals</button>
    <button class="px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded-lg">Sport Bikes</button>
  </div>
</section>

<section class="py-12 px-4 md:px-8 bg-white">
  <div class="text-center mb-8">
    <h2 class="text-3xl font-extrabold text-gray-900">Featured Vehicles</h2>
    <p class="text-gray-600 mt-2">Handpicked premium vehicles from our verified sellers</p>
  </div>

  <!-- Vehicle Cards Grid -->
  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto">
    <!-- Card 1 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/audi.webp') }}" alt="2023 Toyota Camry" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">NEW</span>
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$32,500</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2023 Audi RTS</h3>

        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2023</span><span>12,000 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Hybrid</span><span>Automatic</span>
          </div>
          <div>Mombasa, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">C
            </div>
            <div>
              <p class="text-sm font-semibold">City Motors</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.8 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Duplicate & modify for Card 2 & 3 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/Range.jpg') }}" alt="2022 Honda Accord" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$28,900</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2022 Range Rover Sport</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2022</span><span>18,500 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Manual</span>
          </div>
          <div>Nairobi, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">A
            </div>
            <div>
              <p class="text-sm font-semibold">AutoMax</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.6 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/BMW-i7.jpg') }}" alt="2024 BMW X5" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">NEW</span>
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$67,500</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2024 BMW i7</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2024</span><span>5,200 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Automatic</span>
          </div>
          <div>Kisumu, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">L
            </div>
            <div>
              <p class="text-sm font-semibold">Luxury Motors</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.9 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/audi.webp') }}" alt="2023 Toyota Camry" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">NEW</span>
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$32,500</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2023 Audi RTS</h3>

        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2023</span><span>12,000 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Hybrid</span><span>Automatic</span>
          </div>
          <div>Mombasa, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">C
            </div>
            <div>
              <p class="text-sm font-semibold">City Motors</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.8 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Duplicate & modify for Card 5 & 6 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/Range.jpg') }}" alt="2022 Honda Accord" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$28,900</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2022 Range Rover Sport</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2022</span><span>18,500 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Manual</span>
          </div>
          <div>Nairobi, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">A
            </div>
            <div>
              <p class="text-sm font-semibold">AutoMax</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.6 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/BMW-i7.jpg') }}" alt="2024 BMW X5" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">NEW</span>
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">FEATURED</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">$67,500</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">2024 BMW i7</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2024</span><span>5,200 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Automatic</span>
          </div>
          <div>Kisumu, Kenya</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">L
            </div>
            <div>
              <p class="text-sm font-semibold">Luxury Motors</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ 4.9 <span class="ml-1">✓ Verified</span>
              </p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button
              class="border border-gray-300 text-gray-700 px-3 py-1 rounded-lg hover:bg-gray-100 text-sm font-semibold">
              Details
            </button>
            <button class="bg-blue-900 text-white p-2 rounded-lg hover:bg-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-18 8h18" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- View All -->
  <div class="text-center mt-10">
    <button class="bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-800">
      View All Vehicles →
    </button>
  </div>
</section>

<!-- OUR IMPACT SECTION -->
<section class="bg-sky-900 text-white py-16">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10 uppercase tracking-wide">Our Impact in Numbers</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
      <div>
        <h3 class="text-4xl font-extrabold text-yellow-400">7+</h3>
        <p class="mt-2 text-gray-200">Years of Automotive Excellence</p>
      </div>
      <div>
        <h3 class="text-4xl font-extrabold text-yellow-400">25+</h3>
        <p class="mt-2 text-gray-200">Cars Sold Monthly</p>
      </div>
      <div>
        <h3 class="text-4xl font-extrabold text-yellow-400">100M+</h3>
        <p class="mt-2 text-gray-200">KES Worth of Vehicles Sold</p>
      </div>
      <div>
        <h3 class="text-4xl font-extrabold text-yellow-400">100+</h3>
        <p class="mt-2 text-gray-200">Happy Customers</p>
      </div>
    </div>
  </div>
</section>

<!-- WHY CHOOSE US SECTION -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6 md:px-12">
    <h2 class="text-3xl font-bold text-center mb-10 uppercase">Why Choose Us</h2>

    <div class="grid md:grid-cols-2 gap-10 items-center">
      <!-- Image -->
      <div class="rounded-xl overflow-hidden shadow-md">
        <img src="{{ asset('images/purchase.png') }}"
             alt="Car dealership team"
             class="w-full object-cover">
      </div>

      <!-- Points -->
      <div>
        <ul class="space-y-4 text-lg text-gray-700">
          <li class="flex items-start"><span class="text-green-600 mr-2">✔</span> Wide range of high-quality cars from trusted importers</li>
          <li class="flex items-start"><span class="text-green-600 mr-2">✔</span> Transparent pricing with zero hidden costs</li>
          <li class="flex items-start"><span class="text-green-600 mr-2">✔</span> Experienced sales team and import advisors</li>
          <li class="flex items-start"><span class="text-green-600 mr-2">✔</span> Easy financing and flexible payment plans</li>
          <li class="flex items-start"><span class="text-green-600 mr-2">✔</span> Fast delivery and after-sales support</li>
        </ul>  .
        <p> 
        <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg px-4 py-2 text-sm font-semibold transition">More About Us-></a>
        </p>  
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-50 py-12 px-4 md:px-8">
  <div class="max-w-7xl mx-auto text-center">
    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-2">
      Latest Automotive Insights
    </h2>
    <p class="text-gray-600 mb-10">
      Stay informed with the latest trends, car buying guides, and dealer insights
    </p>

    <!-- Blog Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img
          src="{{ asset('/images/blogs/car-financing.jpg') }}"
          alt="Car Financing"
          class="w-full h-48 object-cover"
        />
        <div class="p-5 text-left">
          <p class="text-sm text-gray-500 mb-2">October 8, 2025</p>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">
            Smart Financing Options for Your Next Vehicle
          </h3>
          <p class="text-gray-600 text-sm mb-3">
            Learn how to secure the best car financing deals and make informed decisions before buying...
          </p>
          <p class="text-sm text-gray-500 mb-3">By West-Side Co. Editorial Team</p>
          <a
            href="#"
            class="inline-block px-4 py-2 text-blue-900 border border-blue-900 rounded-md hover:bg-blue-900 hover:text-white transition"
          >
            Read More
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img
          src="{{ asset('/images/blogs/electric.webp') }}"
          alt="Electric Cars"
          class="w-full h-48 object-cover"
        />
        <div class="p-5 text-left">
          <p class="text-sm text-gray-500 mb-2">September 22, 2025</p>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">
            The Rise of Electric Vehicles in 2025
          </h3>
          <p class="text-gray-600 text-sm mb-3">
            Electric cars are transforming the automotive world — here’s what you need to know about ownership, range, and cost...
          </p>
          <p class="text-sm text-gray-500 mb-3">By Auto Trends Journal</p>
          <a
            href="#"
            class="inline-block px-4 py-2 text-blue-900 border border-blue-900 rounded-md hover:bg-blue-900 hover:text-white transition"
          >
            Read More
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        <img
          src="{{ asset('/images/blogs/car-care.png') }}"
          alt="Car Maintenance"
          class="w-full h-48 object-cover"
        />
        <div class="p-5 text-left">
          <p class="text-sm text-gray-500 mb-2">August 10, 2025</p>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">
            10 Essential Car Maintenance Tips
          </h3>
          <p class="text-gray-600 text-sm mb-3">
            Keep your car in top shape with these essential maintenance tips from certified experts...
          </p>
          <p class="text-sm text-gray-500 mb-3">By West-Side Co. Service Team</p>
          <a
            href="#"
            class="inline-block px-4 py-2 text-blue-900 border border-blue-900 rounded-md hover:bg-blue-900 hover:text-white transition"
          >
            Read More
          </a>
        </div>
      </div>
    </div>

    <!-- View More Button -->
    <div class="mt-10">
      <a
        href="#"
        class="inline-block bg-blue-900 text-white px-6 py-3 rounded-md hover:bg-blue-800 transition"
      >
        View More Insights
      </a>
    </div>
  </div>
</section>

<section class="bg-gray-50 py-16 px-4 md:px-8 text-center relative overflow-hidden">
  <div class="max-w-3xl mx-auto">
    <!-- Animated Emojis Floating -->
    <div class="absolute inset-0 pointer-events-none">
      <span class="absolute text-5xl animate-bounce-slow left-10 top-8">🚗</span>
      <span class="absolute text-5xl animate-bounce-delay right-12 bottom-8">🏍️</span>
      <span class="absolute text-4xl animate-bounce-slower left-1/2 bottom-4">🔑</span>
    </div>

    <!-- CTA Content -->
    <h2 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-2 relative z-10">
      READY TO DRIVE YOUR DREAM CAR?
    </h2>
    <p class="text-gray-600 mb-6 relative z-10">
      Our experienced team is here to help you find, finance, or sell your next vehicle 🚘
    </p>

    <div class="flex justify-center space-x-4 relative z-10">
      <a
        href="#contact"
        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-3 rounded-md shadow-md transition flex items-center space-x-2"
      >
        <span>📞</span>
        <span>Contact Us Today</span>
      </a>

      <a
        href="#team"
        class="bg-blue-900 hover:bg-blue-800 text-white font-semibold px-6 py-3 rounded-md shadow-md transition flex items-center space-x-2"
      >
        <span>👨‍💼</span>
        <span>Meet Our Team</span>
      </a>
    </div>
  </div>

  <style>
    @keyframes bounce-slow {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-12px); }
    }
    @keyframes bounce-delay {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-18px); }
    }
    @keyframes bounce-slower {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow { animation: bounce-slow 3s infinite ease-in-out; }
    .animate-bounce-delay { animation: bounce-delay 4s infinite ease-in-out; }
    .animate-bounce-slower { animation: bounce-slower 5s infinite ease-in-out; }
  </style>
</section>


<script>
  // Accordion Toggle
  const filterToggle = document.getElementById('filterToggle');
  const filterCard = document.getElementById('filterCard');

  filterToggle.addEventListener('click', () => {
    filterCard.classList.toggle('hidden');
  });
</script>



<script src="{{ asset('js/carousel.js') }}"></script>

@endsection