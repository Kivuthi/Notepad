<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Vehicle</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
</head>
<body class="bg-gray-100 py-10">

  <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-lg p-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Edit Vehicle</h2>

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

    <form method="POST" action="{{ route('featuredVehicles.update', $vehicle->id) }}" enctype="multipart/form-data" class="space-y-5">
      @csrf
      @method('PUT')

      <!-- Vehicle Image -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Vehicle Image</label>
        <input type="file" name="image" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-900">

        @if($vehicle->image)
          <img src="{{ asset('storage/'.$vehicle->image) }}" alt="Vehicle Image" class="w-32 h-32 object-cover mt-3 rounded-md shadow">
        @endif
      </div>

      <!-- Make & Model -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Make</label>
          <input type="text" name="make" value="{{ old('make', $vehicle->make) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Model</label>
          <input type="text" name="model" value="{{ old('model', $vehicle->model) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
      </div>

      <!-- Year & Mileage -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Year</label>
          <input type="number" name="year" value="{{ old('year', $vehicle->year) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Mileage (km)</label>
          <input type="number" name="mileage" value="{{ old('mileage', $vehicle->mileage) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
      </div>

      <!-- Powertrain & Transmission -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Powertrain</label>
          <select name="powertrain" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
            <option value="">Select Powertrain</option>
            <option value="gasoline" {{ $vehicle->powertrain == 'gasoline' ? 'selected' : '' }}>Gasoline</option>
            <option value="diesel" {{ $vehicle->powertrain == 'diesel' ? 'selected' : '' }}>Diesel</option>
            <option value="hybrid" {{ $vehicle->powertrain == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
            <option value="electric" {{ $vehicle->powertrain == 'electric' ? 'selected' : '' }}>Electric</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Transmission</label>
          <select name="transmission" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
            <option value="">Select Transmission</option>
            <option value="automatic" {{ $vehicle->transmission == 'automatic' ? 'selected' : '' }}>Automatic</option>
            <option value="manual" {{ $vehicle->transmission == 'manual' ? 'selected' : '' }}>Manual</option>
            <option value="cvt" {{ $vehicle->transmission == 'cvt' ? 'selected' : '' }}>CVT</option>
          </select>
        </div>
      </div>

      <!-- Price & Location -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Price (KSH)</label>
          <input type="number" name="price" value="{{ old('price', $vehicle->price) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
        <div>
          <label class="block text-sm font-semibold text-gray-700 mb-1">Location</label>
          <input type="text" name="location" value="{{ old('location', $vehicle->location) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
        </div>
      </div>

      <!-- Company -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Company</label>
        <input type="text" name="company" value="{{ old('company', $vehicle->company) }}" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-blue-900 focus:outline-none">
      </div>

      <!-- Featured & Arrival -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex items-center space-x-2">
          <input type="checkbox" name="featured" id="featured" {{ $vehicle->featured ? 'checked' : '' }} class="w-4 h-4 text-blue-900 focus:ring-blue-900 border-gray-300 rounded">
          <label for="featured" class="text-gray-700 text-sm font-semibold">Mark as Featured</label>
        </div>
        <div class="flex items-center space-x-2">
          <input type="checkbox" name="arrival" id="arrival" {{ $vehicle->arrival ? 'checked' : '' }} class="w-4 h-4 text-blue-900 focus:ring-blue-900 border-gray-300 rounded">
          <label for="arrival" class="text-gray-700 text-sm font-semibold">New Arrival</label>
        </div>
      </div>

      <!-- Buttons -->
      <div class="flex items-center justify-between mt-6">
        <a href="{{ route('featuredVehicles.index') }}" 
          class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium transition">
          Cancel
        </a>
        <button type="submit" 
          class="px-6 py-2 rounded-lg bg-green-600 hover:bg-green-700 text-white font-semibold shadow transition">
          <i class="fa fa-check mr-1"></i> Update Vehicle
        </button>
      </div>

    </form>
  </div>

</body>
</html>
