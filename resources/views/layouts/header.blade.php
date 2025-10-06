<header class="flex items-center justify-between bg-white shadow-md px-6 py-3">
    <div class="flex items-center space-x-3">
        <button id="sidebarToggle" class="md:hidden text-gray-600 focus:outline-none">
            <i class="fa-solid fa-bars text-xl"></i>
        </button>
        <h1 class="text-xl font-semibold text-gray-800">Dashboard</h1>
    </div>

    <div class="flex items-center space-x-4">
        <button class="text-gray-600 hover:text-indigo-600">
            <i class="fa-regular fa-bell text-lg"></i>
        </button>
        <button class="text-gray-600 hover:text-indigo-600">
            <i class="fa-regular fa-envelope text-lg"></i>
        </button>

        <div class="relative group">
            <button class="flex items-center space-x-2 focus:outline-none">
                <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full border" alt="User">
                <span class="hidden md:block font-medium text-gray-700">Dennis</span>
                <i class="fa-solid fa-caret-down text-gray-500"></i>
            </button>

            <div class="absolute right-0 mt-2 bg-white shadow-lg rounded-md py-2 w-40 opacity-0 group-hover:opacity-100 transition-opacity duration-150">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">Settings</a>
                <hr>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50">Logout</a>
            </div>
        </div>
    </div>
</header>
