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
<body>

  <div class="flex gap-3 p-4">
    <a href="{{ route('dashboard') }}"
       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
        <i class="fa-solid fa-backward"></i>
        Dashboard
    </a>

    <a href="{{ route('cars.create') }}"
       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
        <i class="fa-solid fa-plus"></i>
        Add Vehicle
    </a>
</div>

<h1 class="text-gray-800 text-3xl m-6 font-serif text-center">VEHICLES</h1>
  
<div class="grid md:grid-cols-4 m-10 sm:grid-cols-2 gap-6">
@foreach ($cars as $car)
  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
    {{-- Car Image --}}
    @if ($car->images && count(json_decode($car->images)) > 0)
      <img src="{{ asset('storage/' . json_decode($car->images)[0]) }}" alt="{{ $car->model }}" class="w-full h-48 object-cover">
    @else
      <img src="{{ asset('images/no-image.jpg') }}" alt="No image" class="w-full h-48 object-cover">
    @endif

    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">{{ $car->availability ?? 'Available' }}</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">{{ $car->year }}</span>
      </div>

      <h3 class="text-lg font-semibold text-gray-900 mb-1">
        {{ $car->make }} {{ $car->model }}
      </h3>

      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">{{ $car->transmission ?? 'N/A' }}</span>
        <span class="px-2 py-1 border border-gray-300 rounded">{{ $car->engine }} CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Used</span>
      </div>

      <p class="text-gray-600 text-sm mb-3">
        {{ Str::limit($car->description, 100) }}
      </p>

      <p class="text-lg font-semibold text-gray-900 mb-4">KES {{ number_format($car->price, 2) }}</p>

      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="{{ route('cars.show', $car->id) }}" class="text-blue-900 font-medium hover:underline">
          View Details →
        </a>
      </div>
    </div>
  </div>
@endforeach
</div>


</div>
</body>