@extends('components.pages')

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-xl shadow-md m-20 overflow-hidden p-6">
  <div class="grid md:grid-cols-2 gap-8">

    {{-- LEFT: CAR IMAGE GALLERY --}}
    <div>
      @if ($car->images && count(json_decode($car->images)) > 0)
        @php $images = json_decode($car->images); @endphp

        {{-- Main image --}}
        <a href="{{ asset('storage/' . $images[0]) }}" data-lightbox="car-gallery" data-title="{{ $car->make }} {{ $car->model }}">
          <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $car->model }}" class="w-full h-72 object-cover rounded-lg shadow mb-4">
        </a>

        {{-- Thumbnails --}}
        <div class="flex gap-3 flex-wrap">
          @foreach ($images as $index => $img)
            @if ($index > 0)
              <a href="{{ asset('storage/' . $img) }}" data-lightbox="car-gallery" data-title="{{ $car->make }} {{ $car->model }}">
                <img src="{{ asset('storage/' . $img) }}" alt="Car Image" class="w-24 h-24 object-cover rounded-lg border border-gray-200 hover:opacity-80 transition">
              </a>
            @endif
          @endforeach
        </div>
      @else
        <img src="{{ asset('images/no-image.jpg') }}" alt="No image" class="w-full h-72 object-cover rounded-lg">
      @endif
    </div>

    {{-- RIGHT: CAR DETAILS --}}
    <div>
      <h1 class="text-3xl font-bold text-gray-900 mb-2">{{ $car->make }} {{ $car->model }} ({{ $car->year }})</h1>
      <p class="text-gray-700 mb-4 leading-relaxed">{{ $car->description }}</p>

      <div class="grid grid-cols-2 gap-3 text-gray-700 mb-6">
        <p><strong>Engine:</strong> {{ $car->engine }} CC</p>
        <p><strong>Transmission:</strong> {{ $car->transmission ?? 'N/A' }}</p>
        <p><strong>Mileage:</strong> {{ $car->mileage ?? 'N/A' }} KM</p>
        <p><strong>Powertrain:</strong> {{ $car->powertrain ?? 'N/A' }}</p>
        <p><strong>Availability:</strong> {{ $car->availability ?? 'Available' }}</p>
        <p><strong>Location:</strong> {{ $car->location ?? 'N/A' }}</p>
        <p><strong>Company:</strong> {{ $car->company ?? 'N/A' }}</p>
      </div>

      <p class="text-2xl font-semibold text-gray-900 mb-4">
        Price: <span class="text-blue-900">KES {{ number_format($car->price, 2) }}</span>
      </p>

      <div class="flex justify-between items-center">
        <a href="{{ route('cars.index') }}" class="text-blue-900 hover:underline">← Back to Listings</a>
        <button class="bg-blue-900 text-white font-semibold px-6 py-2 rounded-lg hover:bg-blue-800 transition">
          Contact Seller
        </button>
      </div>
    </div>

  </div>
</div>
@endsection

@section('scripts')
  {{-- Include Lightbox2 --}}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
@endsection
