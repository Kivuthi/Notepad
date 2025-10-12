
<header class="fixed top-0 left-0 w-full bg-white/90 backdrop-blur-md shadow-sm z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-3">
    <!-- Logo -->
    <a href="{{ route('pages.index') }}"><div class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 13l2-2m0 0l7-7 7 7M5 11v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
      </svg>
      <div class="flex flex-col leading-tight">
        <span class="text-lg font-semibold text-gray-900">Ratiah Co.</span>
        <span class="text-sm text-gray-500">Ratiah Co.</span>
      </div>
    </div></a>

    <!-- Navigation links -->
    <nav class="hidden md:flex items-center space-x-8">
      <a href="{{ route('cars.index') }}" class="text-gray-700 hover:text-orange-600 font-medium">Cars</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Bikes</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Import</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Blog</a>
      <a href="{{ route('pages.about') }}" class="text-gray-700 hover:text-orange-600 font-medium">About Us</a>
      <a href="{{ route('pages.contact') }}" class="text-gray-700 hover:text-orange-600 font-medium">Contact Us</a>



    </nav>

    <!-- Buttons -->
    <div class="flex items-center space-x-3">
      <button
        class="border border-gray-400 text-gray-700 hover:bg-gray-100 rounded-lg px-4 py-2 text-sm font-medium transition">
        Login
      </button>
      <button
        class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg px-4 py-2 text-sm font-semibold transition">
        Become a Seller
      </button>
    </div>

    <!-- Mobile Menu Button -->
    <button id="mobile-menu-btn" class="md:hidden focus:outline-none ml-3">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-gray-800" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <nav class="flex flex-col space-y-3 px-6 py-4">
      <a href="{{ route('cars.index') }}" class="text-gray-700 hover:text-orange-600 font-medium">Cars</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Bikes</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Import</a>
      <a href="#" class="text-gray-700 hover:text-orange-600 font-medium">Blog</a>
      <a href="{{ route('pages.about') }}" class="text-gray-700 hover:text-orange-600 font-medium">About Us</a>
      <a href="{{ route('pages.contact') }}" class="text-gray-700 hover:text-orange-600 font-medium">Contact Us</a>
      
      <button
        class="border border-gray-400 text-gray-700 hover:bg-gray-100 rounded-lg px-4 py-2 text-sm font-medium transition">
        Login
      </button>
      <button
        class="bg-orange-500 hover:bg-orange-600 text-white rounded-lg px-4 py-2 text-sm font-semibold transition">
        Become a Seller
      </button>
    </nav>
  </div>
</header>
