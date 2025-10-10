<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Insights</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-50">

    <h1 class="text-gray-800 text-3xl m-6 font-serif">LATEST INSIGHTS TO PUBLISH</h1>

  <div class="flex justify-end p-4">
      <a href="{{ route('insights.create') }}"
         class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white font-semibold px-5 py-2.5 rounded-lg shadow-md transition duration-200">
          <i class="fa-solid fa-plus"></i>
          Add Latest Insights
      </a>
  </div>

  {{-- ✅ Wrap all cards inside one grid --}}
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">

    @foreach($insights as $insight)
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
        {{-- ✅ Check if image exists --}}
        @if($insight->image)
          <img
            src="{{ asset('storage/' . $insight->image) }}"
            alt="{{ $insight->title }}"
            class="w-full h-48 object-cover"
          />
        @else
          <img
            src="{{ asset('images/default.jpg') }}"
            alt="Default"
            class="w-full h-48 object-cover"
          />
        @endif

        <div class="p-5 text-left">
          <p class="text-sm text-gray-500 mb-2">{{ $insight->date }}</p>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $insight->title }}</h3>
          <p class="text-gray-600 text-sm mb-3">{{ $insight->body }}</p>
          <p class="text-sm text-gray-500 mb-3">By: {{ $insight->author }}</p>
          <a
            href="#"
            class="inline-block px-4 py-2 text-blue-900 border border-blue-900 rounded-md hover:bg-blue-900 hover:text-white transition"
          >
            Read More
          </a>
        </div>
      </div>
    @endforeach

  </div>

</body>
</html>
