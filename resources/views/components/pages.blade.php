<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'AutoHub Dashboard') }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    {{-- <script src="https://kit.fontawesome.com/a2d9b6ad95.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/header.js') }}"></script>


</head>
<body class="bg-gray-100 font-sans">

            @include('components.header')

            {{-- Main content --}}
            <main class="p-6 overflow-y-auto">
                @yield('content')
            </main>

            @include('components.footer')

</body>
</html>
