<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Data Ivoire')</title>

    <!-- Tailwind (ou Bootstrap) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet" />

    <!-- Custom CSS (si besoin) -->
    @stack('styles')
</head>
<body class="font-sans antialiased text-gray-800 bg-white">
    {{-- Header global --}}
    @include('components.public.header')

    {{-- Contenu de la page --}}
    @yield('content')

    {{-- Footer général --}}
    @include('components.public.footer')

    @stack('scripts')
</body>
</html>
