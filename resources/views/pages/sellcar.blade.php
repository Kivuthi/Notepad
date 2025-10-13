@extends('components.pages')

@section('content')

<!-- Hero Section -->
<section class="bg-gray-900 dark:bg-gray-950 text-gray-100 py-16 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">
    <!-- Left Image -->
    <div class="w-full md:w-1/2">
      <img src="{{ asset('images/about/r8.jpeg') }}" 
           alt="Sell Your Car"
           class="rounded-2xl w-full object-cover shadow-lg">
    </div>

    <!-- Right Content -->
    <div class="w-full md:w-1/2">
      <h1 class="text-3xl md:text-4xl font-extrabold mb-4">SELL YOUR CAR</h1>
      <div class="text-sm mb-4">
        <a href="{{ route('pages.index') }}" class="text-red-500 hover:underline">Home</a>
        <span class="text-gray-400"> / Sell Your Car</span>
      </div>
      <p class="text-gray-300 leading-relaxed mb-6">
        Want to sell your car easily and safely? <span class="font-semibold text-white">Ratiah Co</span> 
        provides a smooth, transparent process — from verification to final payment.
      </p>
      <a href="#procedure" 
         class="inline-block bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg transition">
        See How It Works
      </a>
    </div>
  </div>
</section>


<!-- Procedure Section -->
<section id="procedure" class="py-20 bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h2 class="text-3xl font-bold mb-12">Our 7-Step Selling Process</h2>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Step 1 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">1. Verify Ownership</h3>
        <p>We begin by confirming the vehicle’s legal ownership and documentation to ensure a transparent sale.</p>
      </div>

      <!-- Step 2 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">2. Car Assessment</h3>
        <p>Our experts assess the vehicle’s condition and take professional photos to highlight its best features.</p>
      </div>

      <!-- Step 3 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">3. Car Valuation</h3>
        <p>We provide a fair market valuation and pricing advice based on the car’s make, model, and condition.</p>
      </div>

      <!-- Step 4 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">4. Storage & Agreement</h3>
        <p>We prepare a consignment agreement and safely store your car while we market it to potential buyers.</p>
      </div>

      <!-- Step 5 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">5. Storage Fee</h3>
        <p>A Ksh. 20,000 storage fee applies only after the sale — or you may opt to keep the vehicle yourself.</p>
      </div>

      <!-- Step 6 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">6. Manage Offers</h3>
        <p>We handle all inquiries, viewings, and negotiations while keeping you informed of every offer received.</p>
      </div>

      <!-- Step 7 -->
      <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-200 dark:border-gray-700">
        <h3 class="text-xl font-semibold mb-3 text-red-600">7. Secure Payment</h3>
        <p>Once a deal is finalized, we manage the payment and legal transfer — ensuring you’re paid securely and promptly.</p>
      </div>

    </div>
  </div>
</section>


<!-- Form Section -->
<section class="py-20 bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100">
  <div class="max-w-5xl mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-10">Sell Your Car Form</h2>
    <form action="" method="POST" enctype="multipart/form-data" 
          class="bg-gray-100 dark:bg-gray-900 p-8 rounded-2xl shadow-lg space-y-6">
      @csrf

      <!-- Owner Info -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block mb-2 font-semibold">Full Name</label>
          <input type="text" name="name" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
        <div>
          <label class="block mb-2 font-semibold">Phone Number</label>
          <input type="text" name="phone" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
      </div>

      <!-- Vehicle Details -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block mb-2 font-semibold">Vehicle Brand</label>
          <input type="text" name="brand" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
        <div>
          <label class="block mb-2 font-semibold">Vehicle Model</label>
          <input type="text" name="model" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block mb-2 font-semibold">Year of Manufacture</label>
          <input type="number" name="year" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
        <div>
          <label class="block mb-2 font-semibold">Expected Selling Price (Ksh)</label>
          <input type="number" name="price" step="0.01" required 
                 class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
        </div>
      </div>

      <div>
        <label class="block mb-2 font-semibold">Vehicle Description</label>
        <textarea name="description" rows="4" required 
                  class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none"
                  placeholder="Condition, mileage, features, etc."></textarea>
      </div>

      <div>
        <label class="block mb-2 font-semibold">Upload Vehicle Images</label>
        <input type="file" name="images[]" multiple 
               class="w-full p-3 rounded-lg border border-gray-300 dark:border-gray-700 dark:bg-gray-800 focus:ring-2 focus:ring-red-600 focus:outline-none">
      </div>

      <div class="text-center">
        <button type="submit" 
                class="bg-red-600 hover:bg-red-700 text-white font-semibold px-8 py-3 rounded-lg transition">
          Submit Details
        </button>
      </div>
    </form>
  </div>
</section>



@endsection