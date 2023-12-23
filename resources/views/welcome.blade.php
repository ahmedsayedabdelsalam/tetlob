<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="h-screen bg-[url('/public/images/ismailia.jpg')] bg-cover bg-no-repeat bg-bottom text-white flex items-center justify-center">
        <livewire:order />
    </div>

    <!-- Scripts -->
    @vite('resources/js/app.js')
</body>
</html>
