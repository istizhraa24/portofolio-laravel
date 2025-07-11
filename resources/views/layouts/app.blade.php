<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Beranda') | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 50%;
            background-color: #ef4444;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .brand-text {
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- Navbar -->
    <nav class="bg-white border-b shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-bold brand-text">•Portofolio•</a>
            <div class="hidden md:flex space-x-8">
                <a href="{{ url('/') }}" class="nav-link text-sm uppercase font-medium text-gray-600 hover:text-gray-900 {{ request()->is('/') ? 'text-red-600' : '' }}">Home</a>
                <a href="{{ url('/about') }}" class="nav-link text-sm uppercase font-medium text-gray-600 hover:text-gray-900 {{ request()->is('about') ? 'text-red-600' : '' }}">About</a>
                <a href="{{ url('/projects') }}" class="nav-link text-sm uppercase font-medium text-gray-600 hover:text-gray-900 {{ request()->is('projects') ? 'text-red-600' : '' }}">Projects</a>
                <a href="{{ url('/sertifikat') }}" class="nav-link text-sm uppercase font-medium text-gray-600 hover:text-gray-900 {{ request()->is('sertifikat') ? 'text-red-600' : '' }}">Certificates</a>
            </div>
            <!-- Mobile Button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="text-gray-600 hover:text-gray-900 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <a href="{{ url('/') }}" class="block py-2 text-sm text-gray-700 {{ request()->is('/') ? 'text-red-600 font-bold' : '' }}">Beranda</a>
            <a href="{{ url('/about') }}" class="block py-2 text-sm text-gray-700 {{ request()->is('about') ? 'text-red-600 font-bold' : '' }}">Tentang Saya</a>
            <a href="{{ url('/projects') }}" class="block py-2 text-sm text-gray-700 {{ request()->is('projects') ? 'text-red-600 font-bold' : '' }}">Proyek</a>
            <a href="{{ url('/contact') }}" class="block py-2 text-sm text-gray-700 {{ request()->is('contact') ? 'text-red-600 font-bold' : '' }}">Kontak</a>
        </div>
    </nav>

    <!-- Halaman -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-6 text-center text-sm text-gray-500">
        &copy; {{ date('Y') }} Isti Zahra Eka Putri Katili. All rights reserved.
    </footer>

    <!-- JS -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
