<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User</title>

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind --}}
    @vite('resources/css/app.css')

    {{-- Icon (gunakan Heroicons, Tabler, atau CDN dari Bootstrap Icons jika masih dipakai) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon">
</head>

<body class="font-nunito bg-gray-100 text-gray-900">

    <div id="app" class="flex min-h-screen">
        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Main Content --}}
        <div id="main" class="flex-1 p-6">
            @yield('content')
        </div>
    </div>

    {{-- Optional: Alpine.js or other interactivity libraries --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Chart Library (opsional, sesuaikan jika pakai ApexCharts atau Chart.js) --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Contoh: inisialisasi chart jika ada
        // const chart = new ApexCharts(...)
        // chart.render()
    </script>
</body>

</html>
