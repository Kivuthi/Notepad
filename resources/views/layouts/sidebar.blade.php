<aside id="sidebar"
    class="fixed md:relative bg-gradient-to-r from-pink-200 to-red-300 text-white w-64 shadow-xl h-screen p-4 space-y-6 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out">

    <div class="flex items-center space-x-3 px-3">
        <img src="https://i.pravatar.cc/50" alt="User" class="w-10 h-10 rounded-full">
        <div>
            <h2 class="text-gray-900 font-semibold">Dennis Musyoka</h2>
            <p class="text-gray-500 text-sm">Chairman</p>
        </div>
    </div>

    <nav class="space-y-1">
        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Dashboard</h5>

        <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-gauge mr-3"></i> Menu
        </a>

        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Manage Content</h5>

        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Home Page</h5>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-section mr-3"></i> Hero Section
        </a>

        <a href="{{ route('featuredVehicles.create') }}" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-car mr-3"></i> Featured Vehicles
        </a>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-blog mr-3"></i> Latest Insights
        </a>

        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Financials</h5>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-tags mr-3"></i> Price Catalog
        </a>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-file-invoice-dollar mr-3"></i> Transaction Ledger
        </a>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-receipt mr-3"></i> Sales Receipts
        </a>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-chart-line mr-3"></i> Financial Summary
        </a>

        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Patners</h5>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-user-tie mr-3"></i> Sellers
        </a>

        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-ship mr-3"></i> Importers
        </a>

        <h5 class="text-gray-900 uppercase text-md font-semibold px-3">Settings</h5>
        
        <a href="#" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600">
            <i class="fa-solid fa-user mr-3"></i> Personal Profile
        </a>
    </nav>
</aside>
