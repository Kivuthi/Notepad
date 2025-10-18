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

    <a href="#"
       class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
        <i class="fa-solid fa-plus"></i>
        Add Vehicle
    </a>
</div>

<h1 class="text-gray-800 text-3xl m-6 font-serif text-center">FEATURED VEHICLES</h1>


</body>