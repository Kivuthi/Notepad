@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <div class="bg-white shadow rounded-lg p-4">
        <h3 class="text-gray-500 text-sm">Total Sales</h3>
        <p class="text-2xl font-bold">$124,500</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4">
        <h3 class="text-gray-500 text-sm">Cars Listed</h3>
        <p class="text-2xl font-bold">248</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4">
        <h3 class="text-gray-500 text-sm">Active Sellers</h3>
        <p class="text-2xl font-bold">58</p>
    </div>
    <div class="bg-white shadow rounded-lg p-4">
        <h3 class="text-gray-500 text-sm">Pending Imports</h3>
        <p class="text-2xl font-bold">9</p>
    </div>
</div>

{{-- Charts --}}
{{-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Monthly Sales</h2>
        <canvas id="salesChart" height="180"></canvas>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-semibold mb-4">Cars Sold by Brand</h2>
        <canvas id="brandChart" height="180"></canvas>
    </div>
</div> --}}

{{-- Sellers Table --}}
<div class="bg-white p-6 rounded-lg shadow mb-6">
    <h2 class="text-lg font-semibold mb-4">Top Sellers</h2>
    <table class="min-w-full border-collapse">
        <thead>
            <tr class="text-left bg-gray-100">
                <th class="p-3">Seller</th>
                <th class="p-3">Cars Sold</th>
                <th class="p-3">Revenue</th>
                <th class="p-3">Status</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b">
                <td class="p-3">John Auto</td>
                <td class="p-3">24</td>
                <td class="p-3">$180,000</td>
                <td class="p-3 text-green-600 font-semibold">Active</td>
                <td class="p-3"><button class="text-indigo-600 hover:underline">View</button></td>
            </tr>
            <tr class="border-b">
                <td class="p-3">Mary Motors</td>
                <td class="p-3">15</td>
                <td class="p-3">$95,000</td>
                <td class="p-3 text-yellow-600 font-semibold">Pending</td>
                <td class="p-3"><button class="text-indigo-600 hover:underline">View</button></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    const ctx1 = document.getElementById('salesChart');
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [{
                label: 'Sales ($)',
                data: [12000, 15000, 14000, 18000, 22000, 20000, 25000],
                borderColor: '#4F46E5',
                tension: 0.3,
                fill: false,
            }]
        },
        options: { responsive: true, plugins: { legend: { display: false } } }
    });

    const ctx2 = document.getElementById('brandChart');
    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: ['Toyota', 'Nissan', 'BMW', 'Mercedes', 'Mazda'],
            datasets: [{
                data: [40, 25, 15, 10, 10],
                backgroundColor: ['#6366F1', '#22C55E', '#F59E0B', '#EF4444', '#3B82F6']
            }]
        },
        options: { responsive: true }
    });
</script>
@endsection
