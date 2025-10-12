
@extends('components.pages')

@section('content')

<section id="about" class="py-12 bg-white dark:bg-gray-900 transition-colors duration-300">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-8 px-4">
    <!-- About Image -->
    <div class="w-full lg:w-1/2">
      <img src="{{ asset('images/about/about.jpg') }}" alt="Our showroom" class="rounded-2xl mt-20 shadow-lg w-full object-cover">
    </div>

    <!-- About Text -->
    <div class="w-full lg:w-1/2 text-gray-800 dark:text-gray-200">
      <h1 class="text-3xl font-bold mb-4">ABOUT US</h1>
      <div class="text-sm mb-4">
        <a href="{{ route('pages.index') }}" class="text-red-500 hover:underline">Home</a>
        <span class="text-gray-500 dark:text-gray-400"> / About us</span>
      </div>
      <p class="leading-relaxed">
        Welcome to Ratiah Co, your trusted partner in automotive solutions and logistics,
        proudly based in Mombasa, Kenya. <br>
        We specialize in the sale of brand new and used, both registered and unregistered vehicles, both locally sourced and imported from across the continent. <br>
        Whether you're in search of a reliable personal car or a fleet for your business,
        we provide a wide selection to meet every need and budget.
      </p>
    </div>
  </div>
</section>

<!-- Core Values -->
<div class="text-center my-12">
  <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-900">CORE VALUES</h1>
</div>

<div class="flex flex-wrap justify-center gap-12 max-w-7xl mx-auto px-4">
  <div class="flex flex-col items-center">
    <img src="{{ asset('images/about/integrity.png') }}" alt="Integrity" class="w-24 h-24 object-contain mb-3">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-800">INTEGRITY</h2>
  </div>
  <div class="flex flex-col items-center">
    <img src="{{ asset('images/about/customer-focus.png') }}" alt="Customer focus" class="w-24 h-24 object-contain mb-3">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-800">CUSTOMER FOCUS</h2>
  </div>
  <div class="flex flex-col items-center">
    <img src="{{ asset('images/about/Excellence.png') }}" alt="Excellence" class="w-24 h-24 object-contain mb-3">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-800">EXCELLENCE</h2>
  </div>
  <div class="flex flex-col items-center">
    <img src="{{ asset('images/about/innovation.png') }}" alt="Innovation" class="w-24 h-24 object-contain mb-3">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-800">INNOVATION</h2>
  </div>
  <div class="flex flex-col items-center">
    <img src="{{ asset('images/about/reliability.png') }}" alt="Reliability" class="w-24 h-24 object-contain mb-3">
    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-800">RELIABILITY</h2>
  </div>
</div>

<!-- Mission and Vision -->
<div class="max-w-7xl mx-auto my-16 px-4 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
  <div>
    <img src="{{ asset('images/about/mission.avif') }}" alt="Car selling" class="rounded-2xl shadow-lg w-full object-cover">
  </div>
  <div class="text-gray-800 dark:text-gray-800">
    <h2 class="text-2xl font-bold mb-2">Our Mission</h2>
    <p class="mb-6">To provide high-quality vehicles and reliable logistics 
      services with integrity, transparency, and a commitment to customer satisfaction.</p>
    <h2 class="text-2xl font-bold mb-2">Our Vision</h2>
    <p>To become a leading name in East Africa for automotive sales and international 
      trade logistics, known for excellence, trust, and innovation.</p>
  </div>
</div>

<!-- Car Dealership -->
<div class="max-w-7xl mx-auto my-16 px-4 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
  <div class="text-gray-800 dark:text-gray-800">
    <h2 class="text-2xl font-bold mb-2">Car Dealership</h2>
    <p>We specialize in the sale of brand new and used vehicles, both locally sourced and 
      imported from across the continent. Whether you're in search of a reliable personal car
      or a fleet for your business, we provide a wide selection to meet every need and budget.</p>
  </div>
  <div>
    <img src="{{ asset('images/about/dealership.jpg') }}" alt="Car Selling" class="rounded-2xl shadow-lg w-full object-cover">
  </div>
</div>

<!-- Clearing and Forwarding -->
<div class="max-w-7xl mx-auto my-16 px-4 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
  <div>
    <img src="{{ asset('images/about/clearing.webp') }}" alt="Clearing and Forwarding" class="rounded-2xl shadow-lg w-full object-cover">
  </div>
  <div class="text-gray-800 dark:text-gray-800">
    <h2 class="text-2xl font-bold mb-2">Clearing and Forwarding</h2>
    <p>In addition to car dealership services, we offer comprehensive clearing and forwarding solutions.
      Our logistics team ensures your cargo moves swiftly, securely, and efficiently—saving you time and 
      money while ensuring compliance with all regulations.</p>
  </div>
</div>

<!-- Import and Export -->
<div class="max-w-7xl mx-auto my-16 px-4 grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
  <div class="text-gray-800 dark:text-gray-800">
    <h2 class="text-2xl font-bold mb-2">Import and Export</h2>
    <p>We help you source and bring in goods from around the world. From motor vehicles to machinery, 
      electronics, and general cargo, our team handles every aspect—from documentation and customs 
      clearance to final delivery. <br><br>
      Whether you are sending products across Africa or overseas, we ensure smooth, timely, and compliant 
      exports. We manage logistics, packaging, documentation, and freight forwarding to ensure your
      goods reach their destination securely.</p>
  </div>
  <div>
    <img src="{{ asset('images/about/import.webp') }}" alt="Import and Export" class="rounded-2xl shadow-lg w-full object-cover">
  </div>
</div>

{{-- testimonials --}}

<section class="py-16 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
  <div class="max-w-6xl mx-auto px-4 text-center">
    <h2 class="text-3xl font-bold mb-12 text-gray-800 dark:text-gray-100">
      What Our Clients Say
    </h2>

    <div class="relative overflow-hidden">
      <!-- Testimonials wrapper -->
      <div class="flex animate-slide space-x-8">
        
        <!-- Testimonial Card 1 -->
        <div class="min-w-[300px] max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center text-gray-700 dark:text-gray-200">
          <img src="static/client1.jpg" alt="Client 1" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-red-500">
          <p class="italic mb-4">"Gabitech helped me import my dream car effortlessly. Their service was fast, professional, and transparent!"</p>
          <h4 class="font-semibold text-lg">— James Mwangi</h4>
          <span class="text-sm text-gray-500 dark:text-gray-400">Customer, Nairobi</span>
        </div>

        <!-- Testimonial Card 2 -->
        <div class="min-w-[300px] max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center text-gray-700 dark:text-gray-200">
          <img src="static/client2.jpg" alt="Client 2" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-red-500">
          <p class="italic mb-4">"Their clearing and forwarding services saved my business time and money. Highly recommended!"</p>
          <h4 class="font-semibold text-lg">— Amina Yusuf</h4>
          <span class="text-sm text-gray-500 dark:text-gray-400">Business Owner, Mombasa</span>
        </div>

        <!-- Testimonial Card 3 -->
        <div class="min-w-[300px] max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center text-gray-700 dark:text-gray-200">
          <img src="static/client3.jpg" alt="Client 3" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-red-500">
          <p class="italic mb-4">"Professional team with great communication. My import process was smooth and stress-free."</p>
          <h4 class="font-semibold text-lg">— Daniel Otieno</h4>
          <span class="text-sm text-gray-500 dark:text-gray-400">Client, Kisumu</span>
        </div>

        <!-- Duplicate for seamless loop -->
        <div class="min-w-[300px] max-w-md bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-6 flex flex-col items-center text-gray-700 dark:text-gray-200">
          <img src="static/client1.jpg" alt="Client 1" class="w-20 h-20 rounded-full mb-4 object-cover border-4 border-red-500">
          <p class="italic mb-4">"Gabitech helped me import my dream car effortlessly. Their service was fast, professional, and transparent!"</p>
          <h4 class="font-semibold text-lg">— James Mwangi</h4>
          <span class="text-sm text-gray-500 dark:text-gray-400">Customer, Nairobi</span>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Animation -->
<style>
@keyframes slide {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-slide {
  display: flex;
  width: max-content;
  animation: slide 20s linear infinite;
}
</style>


@endsection