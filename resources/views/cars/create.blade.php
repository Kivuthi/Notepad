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

    @if (session('success'))
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

<section class="py-10 px-6 lg:px-20 bg-gray-100 dark:bg-gray-900 min-h-screen">
  <div class="max-w-5xl mx-auto bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 text-center">
      Add a New Vehicle
    </h2>

    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
      @csrf

      <!-- Row 1: Make & Model -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Make</label>
          <input type="text" name="make" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Model</label>
          <input type="text" name="model" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
      </div>

      <!-- Row 2: Year & Engine -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Year</label>
          <input type="number" name="year" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Engine (CC)</label>
          <input type="text" name="engine" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
      </div>

      <!-- Row 3: Powertrain & Transmission -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Powertrain</label>
          <input type="text" name="powertrain"
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Transmission</label>
          <select name="transmission"
                  class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
            <option value="">Select Transmission</option>
            <option>Automatic</option>
            <option>Manual</option>
          </select>
        </div>
      </div>

      <!-- Row 4: Mileage & Location -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Mileage (KM)</label>
          <input type="number" name="mileage"
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Location</label>
          <input type="text" name="location"
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
      </div>

      <!-- Row 5: Availability & Company -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Availability</label>
          <select name="availability"
                  class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
            <option value="">Select Status</option>
            <option>Available</option>
            <option>Sold</option>
            <option>Pending</option>
          </select>
        </div>
        <div>
          <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Company</label>
          <input type="text" name="company"
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
        </div>
      </div>

      <!-- Row 6: Price -->
      <div>
        <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Price (KES)</label>
        <input type="number" step="0.01" name="price"
               class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none">
      </div>

      <!-- Row 7: Description -->
      <div>
        <label class="block font-medium text-gray-700 dark:text-gray-300 mb-2">Description</label>
        <textarea name="description" rows="4" required
                  class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
      </div>

    <!-- Multiple Images -->
    <div class="mb-4">
        <label class="block text-gray-700 dark:text-gray-300 mb-2 font-medium">Upload Images</label>
        <input type="file" name="images[]" multiple class="form-control" accept="image/*"
            class="w-full border border-gray-300 dark:border-gray-700 rounded-lg px-3 py-2 cursor-pointer focus:ring-2 focus:ring-blue-500 focus:outline-none">
        <p class="text-xs text-white mt-1">You can select multiple images</p>
    </div>

      <!-- Submit Button -->
      <div class="text-center pt-4 flex justify-between">

        <a href="{{ route('cars.index') }}"
        class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3.5 px-8 rounded-lg shadow-md transition">
            Cancel
        </a>

        <button type="submit"
                class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded-lg shadow-md transition">
          Save Vehicle
        </button>
      </div>
    </form>
    
  </div>
</section>

</body>
