<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add featuredVehicles</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
  {{-- <script src="https://kit.fontawesome.com/a2d9b6ad95.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<div class="flex gap-370 p-4">
    <a href="{{ route('dashboard') }}"
       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
        <i class="fa-solid fa-backward"></i>
        Dashboard
    </a>

    <a href="{{ route('featuredVehicles.create') }}"
       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
        <i class="fa-solid fa-plus"></i>
        Add Vehicle
    </a>
</div>

<h1 class="text-gray-800 text-3xl m-6 font-serif text-center">FEATURED VEHICLES</h1>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
    @foreach($vehicles as $vehicle)
        <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition">
            <div class="relative">
                <img src="{{ asset('storage/' . $vehicle->image) }}" alt="{{ $vehicle->make }}">
                <div class="absolute top-3 left-3 flex flex-col space-y-1">
                    <span class="bg-orange-500 text-white text-xs font-semibold px-2 py-1 rounded-full">
                        {{ $vehicle->arrival ? 'Arrival' : '' }}
                    </span>
                    <span class="bg-blue-900 text-white text-xs font-semibold px-2 py-1 rounded-full">
                        {{ $vehicle->featured ? 'FEATURED' : '' }}
                    </span>
                </div>
                <button class="absolute top-3 right-3 bg-white/70 hover:bg-white p-2 rounded-full shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-5 h-5 text-gray-700">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
                    </svg>
                </button>
                <div class="absolute bottom-3 left-3 bg-white px-3 py-1 rounded-md font-semibold text-gray-800">
                    KSh {{ number_format($vehicle->price) }}
                </div>
            </div>

            <div class="p-5">
                <h3 class="font-bold text-lg text-gray-900 mb-2">
                    {{ $vehicle->make }} {{ $vehicle->model }}
                </h3>

                <div class="text-gray-600 text-sm space-y-1 mb-3">
                    <div class="flex justify-between">
                        <span>{{ $vehicle->year }}</span><span>{{ $vehicle->mileage }} km</span>
                    </div>
                    <div class="flex justify-between">
                        <span>{{ $vehicle->powertrain }}</span><span>{{ $vehicle->transmission }}</span>
                    </div>
                    <div>{{ $vehicle->location }}</div>
                </div>

                <div class="flex items-center justify-between border-t pt-3">
                    <div class="flex items-center space-x-2">
                        <div
                            class="w-8 h-8 rounded-full bg-blue-900 text-white flex items-center justify-center text-sm font-bold">
                            C
                        </div>
                        <div>
                            <p class="text-sm font-semibold">{{ $vehicle->company }}</p>
                            <p class="text-xs text-gray-500 flex items-center">
                                ⭐ Rating <span class="ml-1">✓ Verified</span>
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
</div>
