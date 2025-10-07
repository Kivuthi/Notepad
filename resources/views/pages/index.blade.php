@extends('components.pages')

@section('content')

<section class="relative left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] w-screen h-[75vh] overflow-hidden">
  <!-- Slides -->
  <div id="carousel" class="relative w-full h-full">
    <!-- Slide 1 -->
    <div
      class="slide absolute inset-0 bg-cover bg-center bg-no-repeat flex items-center justify-center transition-opacity duration-1000 opacity-100"
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
            <option>Under $20k</option>
            <option>$20k - $50k</option>
            <option>$50k - $100k</option>
            <option>Above $100k</option>
          </select>
        </div>

        <!-- Example Filter: Type -->
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Vehicle Type</label>
          <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-orange-500 focus:outline-none">
            <option>All</option>
            <option>Sedan</option>
            <option>SUV</option>
            <option>Truck</option>
            <option>Motorbike</option>
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
        <img src="{{ asset('images/car1.jpg') }}" alt="2023 Toyota Camry" class="w-full h-56 object-cover">
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
        <h3 class="font-bold text-lg text-gray-900 mb-2">2023 Toyota Camry</h3>

        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2023</span><span>12,000 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Hybrid</span><span>Automatic</span>
          </div>
          <div>Los Angeles, CA</div>
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
        <img src="{{ asset('images/car2.jpg') }}" alt="2022 Honda Accord" class="w-full h-56 object-cover">
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
        <h3 class="font-bold text-lg text-gray-900 mb-2">2022 Honda Accord</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2022</span><span>18,500 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Manual</span>
          </div>
          <div>Miami, FL</div>
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
        <img src="{{ asset('images/car3.jpg') }}" alt="2024 BMW X5" class="w-full h-56 object-cover">
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
        <h3 class="font-bold text-lg text-gray-900 mb-2">2024 BMW X5</h3>
        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>2024</span><span>5,200 mi</span>
          </div>
          <div class="flex justify-between">
            <span>Gasoline</span><span>Automatic</span>
          </div>
          <div>New York, NY</div>
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