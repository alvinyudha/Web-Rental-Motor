<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ED.RENT') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=plus-jakarta-sans:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/home.css', 'resources/js/home.js'])
</head>

<body class="font-sans antialiased text-text-main bg-bg-main flex flex-col min-h-screen">

    <!-- Navbar -->
    <x-frontend.navbar />

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <x-frontend.footer />

    <!-- Flash Alerts -->
    @if (session('status') === 'profile-updated')
        <x-frontend.alert type="success" message="Profil Anda berhasil diperbarui!" />
    @elseif (session('status') === 'avatar-deleted')
        <x-frontend.alert type="success" message="Foto profil berhasil dihapus!" />
    @endif

    @if ($errors->any())
        <x-frontend.alert type="error" message="{{ $errors->first() }}" />
    @endif

</body>

</html>