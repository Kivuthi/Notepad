@extends('components.pages')

@section('content')
    
body class="bg-gray-100">

<div class="flex flex-col lg:flex-row bg-gray-100 min-h-50vh">
  <!-- Sidebar -->
  <aside class="w-full lg:w-1/4 bg-white-600 p-6 border-r h-fit border-white-200">
    <h2 class="text-lg m-5 ml-23 mt-7  font-semibold mb-4">Search Vehicle</h2>

    <input type="text" placeholder="Search vehicle name"
           class="w-full border border-gray-300 rounded-lg px-3 py-2 mb-4 focus:ring-2 focus:ring-blue-900 focus:outline-none">

    <h3 class="font-semibold mb-2">Filter by Budget</h3>
    <div class="grid grid-cols-2 gap-2 mb-4">
      @foreach (['0-500K', '500K-1M', '1M-2M', '2M-3M', '3M-5M', 'Above 5M'] as $range)
        <button class="border border-gray-300 rounded-md text-sm px-2 py-1 hover:bg-blue-900 hover:text-white">
          {{ $range }}
        </button>
      @endforeach
    </div>

    <h3 class="font-semibold mb-2">Brand & Model</h3>

<!-- Vehicle Brand Input -->
        <input 
        type="text" 
        name="brand" 
        placeholder="Enter Vehicle Brand (e.g. Toyota)" 
        class="w-full border border-gray-300 rounded-lg px-3 py-2 mb-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />

        <!-- Vehicle Model Input -->
        <input 
        type="text" 
        name="model" 
        placeholder="Enter Vehicle Model (e.g. Axio)" 
        class="w-full border border-gray-300 rounded-lg px-3 py-2 mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500"
        />


    <h3 class="font-semibold mb-2">Year of Manufacture</h3>
    <div class="flex gap-2 mb-4">
      <input type="number" placeholder="Min" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2">
      <input type="number" placeholder="Max" class="w-1/2 border border-gray-300 rounded-lg px-3 py-2">
    </div>

    <button type="submit" class="inline-flex items-center gap-2 cursor-pointer bg-green-600 hover:bg-green-700 text-white w-full border font-semibold px-4 py-2.5 rounded-lg shadow-md transition duration-200">
        Search
    </button>

    <div class="bg-gradient-to-r from-gray-300 to-gray-700 text-white rounded-2xl p-6 text-center shadow-lg w-full max-w-md mt-10 mx-auto">
        <img src="{{ asset('images/car-bike.jpg') }}" alt="Bike" class="mx-auto mb-4 w-80 h-32 object-contain">
        <p class="text-sm mb-2">
            Want to sell your vehicle or Motorbike?.<br>
            Click this link to Sell or Enlist your vehicle.
        </p>
        <a href="{{ route('pages.sellcar') }}" class="text-white font-semibold underline hover:text-blue-400 transition">
            Enlist your Vehicle or Motorbike
        </a>
    </div>

      <!-- 🏷️ Brand Logos Section -->
  <div class="mt-10">
    <h3 class="font-semibold mb-3">Popular Brands</h3>
    <div class="grid grid-cols-2 gap-4">
      @php
        $brands = [
          ['name' => 'Audi', 'logo' => 'Audi.png'],
          ['name' => 'BMW', 'logo' => 'BMW.png'],
          ['name' => 'Ferrari', 'logo' => 'Ferrari.png'],
          ['name' => 'Honda', 'logo' => 'honda.png'],
          ['name' => 'Hyundai', 'logo' => 'Hyundai.png'],
          ['name' => 'Infinity', 'logo' => 'infinity.png'],
          ['name' => 'Isuzu', 'logo' => 'Isuzu.png'],
          ['name' => 'Jaguar', 'logo' => 'Jaguar.png'],
          ['name' => 'Jeep', 'logo' => 'Jeep.png'],
          ['name' => 'Landrover', 'logo' => 'landrover.png'],
          ['name' => 'Lexus', 'logo' => 'Lexus.png'],
          ['name' => 'Maserati', 'logo' => 'maserati.png'],
          ['name' => 'Mazda', 'logo' => 'mazda-1.png'],
          ['name' => 'Mercedes', 'logo' => 'Mercedes-Benz.png'],
          ['name' => 'Mini', 'logo' => 'Mini.png'],
          ['name' => 'Mitsubishi', 'logo' => 'Mitsubishi.png'],
          ['name' => 'Nissan', 'logo' => 'Nissan.png'],
          ['name' => 'Peugeot', 'logo' => 'Peugeot.png'],
          ['name' => 'Porsche', 'logo' => 'Porsche.png'],
          ['name' => 'Rolls-Royce', 'logo' => 'rolls-royce-logo.png'],
          ['name' => 'Subaru', 'logo' => 'Subaru.png'],
          ['name' => 'Suzuki', 'logo' => 'Suzuki.png'],
          ['name' => 'Tesla', 'logo' => 'Tesla.png'],
          ['name' => 'Toyota', 'logo' => 'Toyota.png'],
          ['name' => 'Volkswagen', 'logo' => 'Volkswagen.png'],
          ['name' => 'Volvo', 'logo' => 'Volvo-1.png'],
        ];
      @endphp

      @foreach ($brands as $brand)
        <a href="{{ route('pages.inventory', ['brand' => strtolower($brand['name'])]) }}"
           class="flex flex-col items-center bg-gray-700 dark:bg-gray-100 p-2 rounded-lg hover:bg-blue-500 hover:text-white transition">
          <img src="{{ asset('images/logos/' . $brand['logo']) }}" 
               alt="{{ $brand['name'] }}" 
               class="w-14 h-14 object-contain mb-1">
          <span class="text-xs font-medium">{{ $brand['name'] }}</span>
        </a>
      @endforeach
    </div>
  </div>

  </aside>

  <!-- Vehicle Grid -->
  <main class="flex-1 p-6">

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6 bg-gray-50">

  <!-- Vehicle Card -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/audi.webpg') }}" alt="Mercedes Benz C180" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2014</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Mercedes Benz C180</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">1600 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        The C180 combines German engineering with executive comfort and modern tech.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,549,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/BMW-i7.jpg') }}" alt="Toyota Axio" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2011</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Toyota Axio</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">1500 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        Reliable and fuel-efficient sedan — ideal for city driving and comfort.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 979,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <!-- Card 3 -->
  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
    <img src="{{ asset('images/Range.jpg') }}" alt="Nissan Xtrail" class="w-full h-48 object-cover">
    <div class="p-5">
      <div class="flex justify-between items-center mb-2">
        <span class="text-sm bg-green-100 text-green-700 font-semibold px-2 py-1 rounded">Available</span>
        <span class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded">2018</span>
      </div>
      <h3 class="text-lg font-semibold text-gray-900 mb-1">Nissan Xtrail</h3>
      <div class="flex flex-wrap gap-2 text-sm text-gray-600 mb-3">
        <span class="px-2 py-1 border border-gray-300 rounded">Automatic</span>
        <span class="px-2 py-1 border border-gray-300 rounded">2000 CC</span>
        <span class="px-2 py-1 border border-gray-300 rounded">Kenyan Used</span>
      </div>
      <p class="text-gray-600 text-sm mb-3">
        A modern compact SUV offering comfort, power, and practicality for families.
      </p>
      <p class="text-lg font-semibold text-gray-900 mb-4">KES 2,699,999</p>
      <div class="flex justify-between items-center">
        <span class="text-xs bg-gray-900 text-white px-3 py-1 rounded">In-House Stock</span>
        <a href="#" class="text-blue-900 font-medium hover:underline">View Details →</a>
      </div>
    </div>
  </div>

</div>

    </div>
  </main>
</div>


@endsection
