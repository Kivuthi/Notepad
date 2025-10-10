
<a href="{{ route('featuredVehicles.create') }}" class="inline-flex items-center gap-1 bg-green-600 hover:bg-green-700 text-white px-4 py-2.5 rounded-md text-sm">Add Vehicles</a>
  
    @if(session('success'))
        <p class="mt-4 text-green-600">{{ session('success') }}</p>
    @endif

{{-- <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
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
    </div> --}}

    @foreach($featuredVehicles as $vehicle)
      <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
      <div class="relative">
        <img src="{{ asset('images/audi.webp') }}" alt="2023 Toyota Camry" class="w-full h-56 object-cover">
        <div class="absolute top-3 left-3 flex flex-col space-y-1">
          <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">{{$vehicle->arrival}}</span>
          <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">{{$vehicle->featured}}</span>
        </div>
        <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-5 h-5 text-gray-700">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
          </svg>
        </button>
        <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">price</div>
      </div>

      <div class="p-5">
        <h3 class="font-bold text-lg text-gray-900 mb-2">{{$vehicle->make}}</h3>

        <div class="text-gray-600 text-sm space-y-1 mb-3">
          <div class="flex justify-between">
            <span>{{$vehicle->year}}</span><span>{{$vehicle->mileage}}</span>
          </div>
          <div class="flex justify-between">
            <span>{{$vehicle->powertrain}}</span><span>{{$vehicle->transmission}}</span>
          </div>
          <div>{{$vehicle->location}}</div>
        </div>

        <div class="flex items-center justify-between border-t pt-3">
          <div class="flex items-center space-x-2">
            <div
              class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">C
            </div>
            <div>
              <p class="text-sm font-semibold">{{$vehicle->company}}</p>
              <p class="text-xs text-gray-500 flex items-center">
                ⭐ rating <span class="ml-1">✓ Verified</span>
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
    @endforeach
    