<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/kopumedis_logo_1.ico') }}">

    <title>{{ config('app.name', 'Kopumedis') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen w-screen bg-gray-100">
    <aside class="w-2xs h-screen bg-white border-r border-gray-200 flex flex-col">
        <!-- Logo -->
        <div class="p-6 flex items-center justify-between space-x-2">
            <img src="img/logo/kopumedis_logo.webp" class="w-40" alt="">
            <a href="#" class="rounded-lg hover:bg-gray-100 px-2 py-1 border border-gray-200 transition"><i class="ri-contract-left-line text-xl text-gray-500"></i></a>
        </div>

        <!-- Company Selector -->
        <div class="px-6 py-3">
            <div class="border border-gray-300 rounded-lg p-3 bg-gray-200 flex items-center justify-between">
                <div>
                    <p class="font-medium text-sm">PT. SNA BUNAYYA PAPUA</p>
                    <p class="text-xs text-gray-500">Team - 20 Members</p>
                </div>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>

        <!-- Main Menu -->
        <nav class="px-6 mt-2 flex-1">
            <ul class="space-y-1 mb-4">
                <li>
                    <a href="#"
                    class="flex items-center px-3 py-2 rounded-lg border border-green-200 bg-green-50 text-green-600 font-normal">
                        <i class="ri-dashboard-horizontal-line mr-2 text-lg"></i>
                        Dashboard
                    </a>
                </li>
            </ul>
            <p class="text-xs font-semibold text-gray-500 mb-2">MASTER DATA</p>
            <ul class="space-y-1 mb-4">
                <li>
                    <a href="#"
                    class="flex items-center px-3 py-2 rounded-lg text-gray-500 hover:bg-gray-100">
                        <i class="ri-building-3-line mr-2 text-lg"></i>
                        Data Pabrik
                    </a>
                </li>
                <li>
                    <a href="#"
                    class="flex items-center px-3 py-2 rounded-lg text-gray-500 hover:bg-gray-100">
                        <i class="ri-hospital-line mr-2 text-lg"></i>
                        Data Apotek
                    </a>
                </li>
                <li>
                    <a href="#"
                    class="flex items-center px-3 py-2 rounded-lg text-gray-500 hover:bg-gray-100">
                        <i class="ri-file-copy-2-line mr-2 text-lg"></i>
                        Data Kategori Obat
                    </a>
                </li>
                <li>
                    <a href="#"
                    class="flex items-center px-3 py-2 rounded-lg text-gray-500 hover:bg-gray-100">
                        <i class="ri-capsule-line mr-2 text-lg"></i>
                        Data Obat
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
</body>

</html>
