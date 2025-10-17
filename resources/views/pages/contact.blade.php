@extends('components.pages')

@section('content')

<section class="bg-gray-400 dark:bg-gray-950 text-gray-100 py-16 mb-10 px-6 lg:px-20">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">

    <!-- Left Side Image -->
    <div class="w-full md:w-1/2">
      <img src="{{ asset('images/contact.webp') }}" alt="Our showroom"
           class="rounded-2xl w-full object-cover shadow-lg">
    </div>

    <!-- Right Side Text -->
    <div class="w-full md:w-1/2">
      <h1 class="text-3xl md:text-4xl font-extrabold mb-4">CONTACT US</h1>
      <div class="text-sm mb-4">
        <a href="{{ route('pages.index') }}" class="text-red-500 hover:underline">Home</a>
        <span class="text-gray-400"> / Contact us</span>
      </div>
      <p class="text-gray-300 leading-relaxed">
        Contact <span class="font-semibold text-white">Ratiah co</span>, your trusted partner in automotive solutions and logistics,
        proudly based in Mombasa, Kenya.
      </p>
    </div>

  </div>
</section>


<section class="bg-gray-50 dark:bg-white-600 text-gray-800 dark:text-gray-100 py-16 px-6">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12">

    <!-- Left Side - Office Info -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8 space-y-6">
      <h2 class="text-2xl font-bold mb-4">Our Office</h2>

      <div>
        <h3 class="font-semibold text-lg">Address</h3>
        <p class="text-gray-600 dark:text-gray-300 mt-1">
          Ratiah Co<br><br>
          Kaa Arcade, 1st Floor, Suite 6B <br><br>
          Opposite Sizzling Flames Hotel <br><br>
          Kwashibu Road, Mombasa, Kenya
        </p>
      </div>

      <div>
        <h3 class="font-semibold text-lg flex items-center gap-2">
          📞 Phone
        </h3>
        <a href="tel:+254 745392382<" class="text-red-100 hover:text-red-700 blank">+254 745 392 382</a>
      </div>

      <div>
        <h3 class="font-semibold text-lg flex items-center gap-2">
          📧 Email
        </h3>
        <a href="mailto:officialdee77@gmail.com" class="text-red-100 hover:text-red-700 blank">officialdee77@gmail.com</a>
      </div>

      <ul class="space-y-2 m-1">
        <li><h4 class="text-white text-xl font-serif mb-4">Working Hours</h4></li>
        <li class="text-red-600">Monday -  Friday</li>
        <li>0800Hrs To 1800Hrs</li>
        <li class="text-red-600">Saturday</li>
        <li>0600hrs To 1700Hrs</li>
        <li class="text-red-600">Sunday</li>
        <li>CLOSED</li>
      </ul>
    </div>

    <!-- Right Side - Contact Form -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-8">
      <h2 class="text-2xl font-bold mb-4">Send Us a Message</h2>

      <form action="#" method="POST" class="space-y-4">
        <div>
          <label class="block font-medium">Full Name *</label>
          <input type="text" class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600" placeholder="Enter your full name" required>
        </div>

        <div>
          <label class="block font-medium">Email Address *</label>
          <input type="email" class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600" placeholder="Enter your email" required>
        </div>

        <div>
          <label class="block font-medium">Phone Number</label>
          <input type="text" class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600" placeholder="Enter your phone number">
        </div>

        <div>
          <label class="block font-medium">Subject *</label>
          <input type="text" class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600" placeholder="Enter message subject" required>
        </div>

        <div>
          <label class="block font-medium">Department</label>
          <select class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600">
            <option>Select a department</option>
            <option>Sales</option>
            <option>Support</option>
            <option>Logistics</option>
          </select>
        </div>

        <div>
          <label class="block font-medium">Message *</label>
          <textarea rows="4" class="w-full mt-1 p-3 border border-gray-300 dark:border-gray-700 rounded-lg bg-gray-50 dark:bg-gray-600" placeholder="Please describe your inquiry" required></textarea>
        </div>

        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg transition duration-300">
          Send Message
        </button>
      </form>
    </div>

  </div>

</section>

 <!-- Map Section -->
  <div class="mt-16 w-full">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.73767715448105!2d39.66834612593697!3d-4.0605790788237135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18401320bccbb35f%3A0xe7ba02f06861f5a9!2sKp%20Industrial%20Hardware!5e0!3m2!1sen!2ske!4v1760301214099!5m2!1sen!2ske"
      class="w-full h-[450px] rounded-2xl shadow-lg border-0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>

@endsection
