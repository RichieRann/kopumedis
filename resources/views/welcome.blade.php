<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/kopumedis_logo_1.ico') }}">

    <title>{{ config('app.name', 'Kopumedis') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen w-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-6xl bg-white rounded-2xl shadow-xl flex overflow-hidden">
        
        <!-- Bagian Kiri (Form) -->
        <div class="w-1/2 p-10 flex flex-col justify-center">
            <!-- Logo -->
            <div class="mb-10">
                <img src="img/logo/kopumedis_logo.webp" class="w-40" alt="">
            </div>

            <h2 class="text-3xl font-semibold mb-2 text-center">Welcome Back</h2>
            <p class="text-gray-500 mb-5 text-center">Welcome Back, Please enter your details</p>

            <!-- Form -->
            <div class="w-full flex justify-center">
                <form action="#" method="POST" class="w-96 space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <div class="flex items-center justify-between border border-gray-300 rounded-lg px-3 py-2">
                            <input type="email" name="email" placeholder="you@example.com" class="flex-1 outline-none">
                            <i class="ri-at-line text-gray-400 h-5 w-5"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Password</label>
                        <div class="flex items-center justify-between border border-gray-300 rounded-lg px-3 py-2">
                            <input type="password" name="password" placeholder="*****" class="flex-1 outline-none">
                            <i class="ri-lock-2-line text-gray-400 h-5 w-5"></i>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-3 bg-green-500 text-white font-semibold rounded-lg hover:bg-green-600 transition">
                        Login
                    </button>
                </form>
            </div>

            <!-- Or Continue With -->
            <div class="w-full mx-auto flex justify-center">
                <div class="mt-6 flex items-center space-x-4">
                    <span class="flex-1 max-w-20 h-px bg-gray-300"></span>
                    <span class="text-gray-400 text-sm">Or Continue With</span>
                    <span class="flex-1 max-w-20 h-px bg-gray-300"></span>
                </div>
            </div>

            <div class="mt-6 flex justify-center space-x-6">
                <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 p-1">
                    <img width="25" height="25" src="https://img.icons8.com/color/48/google-logo.png" alt="google-logo"/>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 p-1">
                    <img width="25" height="25" src="https://img.icons8.com/color/48/facebook-circled--v1.png" alt="facebook-circled--v1"/>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-200 p-1">
                    <img width="25" height="25" src="https://img.icons8.com/ios-filled/50/mac-os.png" alt="mac-os"/>
                </button>
            </div>

            <p class="mt-10 text-xs text-gray-500 text-center">
                Copyright © 2025 Kopumedis.
            </p>
        </div>

        <!-- Bagian Kanan (Ilustrasi) -->
        <div class="w-1/2 bg-gradient-to-b from-green-200 to-green-300 flex items-center justify-center p-6">
            <img src="img/logo/kopumedis_logo_1.webp" class="w-40" alt="">
        </div>
    </div>
</body>

</html>
