<footer class="bg-gray-900 text-gray-300 pt-12 pb-6">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">
    <!-- Brand -->
    <div>
      <div class="flex items-center space-x-2 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 13l2-2m0 0l7-7 7 7M5 11v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6" />
        </svg>
        <span class="text-xl font-semibold text-white">Ratiah Co.</span>
      </div>
      <p class="text-sm leading-relaxed text-gray-400">
        Your premier automotive marketplace for trusted car, bike, and import dealers — all in one place.
      </p>
      <ul class="space-y-2 m-1">
        <li><h4 class="text-white text-xl font-serif mb-4">Working Hours</h4></li>
        <li class="text-orange-500">Monday -  Friday</li>
        <li>0800Hrs To 1800Hrs</li>
        <li class="text-orange-500">Saturday</li>
        <li>0900hrs To 1700Hrs</li>
        <li class="text-orange-500">Sunday</li>
        <li>CLOSED</li>
      </ul>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
      <ul class="space-y-2">
        <li><a href="{{ route('pages.inventory') }}" class="hover:text-orange-500 transition">Cars</a></li>
        <li><a href="#" class="hover:text-orange-500 transition">Bikes</a></li>
        <li><a href="{{ route('pages.import') }}" class="hover:text-orange-500 transition">Import</a></li>
        <li><a href="#" class="hover:text-orange-500 transition">Blog</a></li>
        <li><a href="{{ route('pages.sellcar') }}" class="hover:text-orange-500 transition">Sell your Car</a></li>
        <li><a href="{{ route('pages.about') }}" class="hover:text-orange-500 transition">About Us</a></li>
        <li><a href="{{ route('pages.contact') }}" class="hover:text-orange-500 transition">Contact Us</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div>
      <h3 class="text-white text-xl font-semibold mb-4">Contact Us</h3>
      <ul class="space-y-2 text-sm">
        <li class="text-lg">Ratiah Co.</li>
        <li>Kwashibu Road, Mombasa, Kenya</li>
        <li>Ratiah House, 1st Floor</li>
        <li>Opposite Sizzling Flame Hotel</li>
        <li>P.O Box 80100</li>
        <li>Mombasa, Kenya</li>
        <li>📞 <a href="tel: +254 745 392 382" class="blank hover:text-orange-500 transition">+254 745 392 382</a></li>
        <li>✉️ <a href="mailto:officialdee77@gmail.com" class="hover:text-orange-500 transition blank">officialdee77@gmail.com</a></li>
      </ul>
    </div>

    <!-- Social -->
    <div>
      <h3 class="text-white text-lg font-semibold mb-4">Follow Us</h3>
      <div class="flex space-x-4">
        <a href="#" class="hover:text-orange-500 transition" aria-label="Facebook">
          <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="hover:text-orange-500 transition" aria-label="Instagram">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        <a href="#" class="hover:text-orange-500 transition" aria-label="Twitter">
          <i class="fab fa-x-twitter text-xl"></i>
        </a>
        <a href="#" class="hover:text-orange-500 transition" aria-label="Tik Tok">
          <i class="fa-brands fa-tiktok text-xl"></i>
        </a>
        <a href="#" class="hover:text-orange-500 transition" aria-label="Tik Yok">
          <i class="fa-brands fa-whatsapp text-xl"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Divider -->
  <div class="border-t border-gray-700 mt-10 pt-6 text-center text-sm text-gray-500">
    © {{ date('Y') }} Ratiah Co. All rights reserved.
    <p>Craft by <a href="https://kivuthi.github.io/Portfolio-Website/" class="hover:text-orange-500 transition">Kivuthi</a> </p>
  </div>
</footer>
