<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- {{-- meta description terkait SEO --}} -->
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
       
        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
           <!-- {{-- membuat komponen navigation untuk home --}}
           {{-- basenya bisa menggunakan layouts.navigation, hanya saja hilangkan bagian menu login --}} -->
           <!-- @include('layouts.navigationhome') -->
           <!-- Page Content -->
           <main>
            <!-- {{-- Slot untuk halaman konten yang berubah dinamis sesuai dengan view yang dipanggil oleh controller --}} -->
                {{ $slot }}
           <main>
            </div>
        </div>
    </body>
</html>
