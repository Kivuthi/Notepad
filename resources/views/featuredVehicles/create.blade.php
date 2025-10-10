{{-- @extends('components.pages') --}}
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
  
</body>
</html>

@if(session('success'))
    <div class="mb-4 p-4 bg-green-200 text-green-800 rounded-lg">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded-lg">
        <ul class="list-disc list-inside">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('featuredVehicles.store') }}" enctype="multipart/form-data" class="bg-white rounded-2xl shadow-md p-6 max-w-3xl mx-auto space-y-5">
  @csrf

  <h2 class="text-2xl font-bold text-gray-800 mb-4">Add a New Vehicle</h2>

  <!-- Vehicle Image Upload -->
  <div>
    <label class="block text-sm font-semibold text-gray-700 mb-1">Vehicle Image</label>
    <input type="file" name="image" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-900">
  </div>

  <!-- Vehicle Make and Model -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Make</label>
      <input type="text" name="make" placeholder="e.g. Toyota" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Model</label>
      <input type="text" name="model" placeholder="e.g. Camry" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
  </div>

  <!-- Year and Mileage -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Year</label>
      <input type="number" name="year" placeholder="2024" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Mileage (km)</label>
      <input type="number" name="mileage" placeholder="5000" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
  </div>

  <!-- Powertrain and Transmission -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Powertrain</label>
      <select name="powertrain" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        <option value="">Select Powertrain</option>
        <option value="gasoline">Gasoline</option>
        <option value="diesel">Diesel</option>
        <option value="hybrid">Hybrid</option>
        <option value="electric">Electric</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Transmission</label>
      <select name="transmission" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        <option value="">Select Transmission</option>
        <option value="automatic">Automatic</option>
        <option value="manual">Manual</option>
        <option value="cvt">CVT</option>
      </select>
    </div>
  </div>

  <!-- Price and Location -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Price (KSH)</label>
      <input type="number" name="price" placeholder="35000" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Location</label>
      <input type="text" name="location" placeholder="e.g. Nairobi, Kenya" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
    </div>
  </div>

  <!-- Featured & Status -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="flex items-center space-x-2">
      <input type="checkbox" name="featured" id="featured" class="w-4 h-4 text-blue-900 focus:ring-blue-900 border-gray-300 rounded">
      <label for="featured" class="text-gray-700 text-sm font-semibold">Mark as Featured</label>
    </div>
    <div class="flex items-center space-x-2">
      <input type="checkbox" name="arrival" id="arrival" class="w-4 h-4 text-blue-900 focus:ring-blue-900 border-gray-300 rounded">
      <label for="arrival" class="text-gray-700 text-sm font-semibold">New Arrival</label>
    </div>
  </div>

  <!-- Submit Button -->

  <div class="flex items-center justify-between">
      <a href="{{ route('featuredVehicles.index') }}" 
          class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
          Cancel
      </a>
      <button type="submit" 
          class="px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow transition">
          Add Vehicle
      </button>
  </div>

  {{-- <div class="pt-4 flex justify-end">
    <a href="{{ route('featuredVehicles.index') }}"
      class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
      Cancel
    </a>
    <button type="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-semibold px-6 py-2 rounded-lg shadow">
      Add Vehicle
    </button>
  </div> --}}
</form>
