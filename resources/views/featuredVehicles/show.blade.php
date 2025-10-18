<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $vehicle->make }} {{ $vehicle->model }} Details</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-8 mt-10">
  <div class="flex flex-col md:flex-row gap-8">
    <!-- Image -->
    <div class="md:w-1/2">
      <img src="{{ asset('storage/' . $vehicle->image) }}" 
           alt="{{ $vehicle->make }} {{ $vehicle->model }}" 
           class="w-full h-auto rounded-lg shadow-md">
    </div>

    <!-- Details -->
    <div class="md:w-1/2 space-y-3">
      <h1 class="text-3xl font-bold text-gray-900">{{ $vehicle->make }} {{ $vehicle->model }}</h1>
      <p class="text-gray-700"><strong>Year:</strong> {{ $vehicle->year }}</p>
      <p class="text-gray-700"><strong>Mileage:</strong> {{ number_format($vehicle->mileage) }} km</p>
      <p class="text-gray-700"><strong>Powertrain:</strong> {{ ucfirst($vehicle->powertrain) }}</p>
      <p class="text-gray-700"><strong>Transmission:</strong> {{ ucfirst($vehicle->transmission) }}</p>
      <p class="text-gray-700"><strong>Location:</strong> {{ $vehicle->location }}</p>
      <p class="text-gray-700"><strong>Company:</strong> {{ $vehicle->company }}</p>
      <p class="text-xl font-bold text-blue-700">KSH {{ number_format($vehicle->price) }}</p>
      
      <div class="mt-6 flex items-center gap-4">
        <a href="{{ route('pages.inventory', $vehicle->id) }}" 
           class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
           ← Back
        </a>
        {{-- <a href="{{ route('featuredVehicles.edit', $vehicle->id) }}" 
           class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium transition">
           Edit
        </a> --}}
      </div>
    </div>
  </div>
</div>

</body>
</html>
