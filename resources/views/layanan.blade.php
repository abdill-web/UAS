<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        /* Custom Font */
        body {
            font-family: 'Ubuntu', sans-serif;
        }
    </style>
    <script>
        function toggleMenu() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        }
    </script>
</head>
<body class="font-ubuntu bg-gray-100">
    <!-- Navbar -->
    <header class="navbar py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg fixed top-0 left-0 w-full z-50">   
        <div class="container mx-auto flex items-center h-full px-5 text-white font-bold">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="/img/inaklug.png" alt="Inaklug Logo" class="h-[50px] mr-3">
                <h1 class="text-xl sm:text-2xl">Inaklug</h1>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="ml-auto md:hidden">
                <button onclick="toggleMenu()" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Route for Desktop -->
            <nav class="hidden md:flex gap-5 text-sm ml-10">
                <a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="/tentangkami" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="/layanankami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="/artikel" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="#hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>
    
            <!-- Button Daftar for Desktop -->
            <button type="button" class="hidden md:block ml-auto px-4 sm:px-6 py-2 bg-[#1C5194] text-white rounded-full hover:bg-blue-700 transition-all duration-300">
                Daftar Online
            </button>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="hidden md:hidden bg-[#46074E] text-white w-full px-5 py-5 absolute top-[80px] left-0 z-40 shadow-md">
            <a href="/" class="block py-2 hover:text-gray-200 transition-colors duration-300">Home</a>
            <a href="/tentangkami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
            <a href="/layanankami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
            <a href="/artikel" class="block py-2 hover:text-gray-200 transition-colors duration-300">Artikel</a>
            <a href="/hubungi-kami" class="block py-2 hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            <button type="button" class="w-full mt-4 px-6 py-2 bg-[#1C5194] text-white rounded-full hover:bg-blue-700 transition-all duration-300">
                Daftar Online
            </button>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-[80px]">
        <!-- Header Section -->
        <div class="w-full h-[400px] sm:h-[550px] bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] relative">
            <h1 class="absolute text-white left-1/4 sm:left-[9%] top-[70%] sm:top-[87.4%] text-2xl sm:text-4xl">LAYANAN KAMI</h1>
            <img src="/img/diskusi.jpg" class="h-full w-full object-cover" alt="Header Background">
        </div>
        
        <!-- Layanan Kami Section -->
        <section class="py-16 bg-gray-100">
            <div class="container mx-auto px-5">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="relative group">
            <img src="/img/bachelor.png" alt="Studi S1 - Bachelor" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Studi S1 - Bachelor</p>
        </div>

        <!-- Card 2 -->
        <div class="relative group">
            <img src="/img/master.png" alt="Studi S2 - Master" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Studi S2 - Master</p>
        </div>

        <!-- Card 3 -->
        <div class="relative group">
            <img src="/img/phd.jpg" alt="Studi S3 - Ph.D" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Studi S3 - Ph.D</p>
        </div>

        <!-- Card 4 -->
        <div class="relative group">
            <img src="/img/kursus.png" alt="Kursus Bahasa Asing" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Kursus Bahasa Asing</p>
        </div>

        <!-- Card 5 -->
        <div class="relative group">
            <img src="/img/studytour.png" alt="Study Tour" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Study Tour</p>
        </div>

        <!-- Card 6 -->
        <div class="relative group">
            <img src="/img/ausbildung.jpg" alt="Ausbildung" class="w-full h-64 object-cover rounded-lg">
            <div class="absolute inset-0 bg-purple-900 bg-opacity-0 rounded-lg group-hover:bg-opacity-70 transition duration-300"></div>
            <p class="absolute bottom-4 left-4 text-white font-semibold text-lg">Ausbildung</p>
        </div>
    </div>
</div>
</html>
        <!-- Body 3 -->
        <div class="text-center py-8 px-4">
            <h1 class="text-2xl font-semibold">Hubungi Kami</h1>
            <h2 class="text-xl font-medium mt-2">Kantor Pusat</h2>
            <p class="text-base mt-1">MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT. BASEMENT.</p>
            <p class="text-base mt-2">Phone: 085286754052</p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
                <button class="px-6 py-2 text-white font-semibold bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] rounded-full">
                    LOKASI KAMI
                </button>
                <button class="px-6 py-2 text-black font-semibold bg-gray-200 border border-black rounded-full">
                    KIRIM PESAN
                </button>
            </div>
        </div>
    </main>

    <footer class="flex items-center justify-center py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg text-white mt-10">
        Copyright @ 2020 - Inaklug Indonesia | Hak cipta dilindungi undang undang
    </footer>      

    <script>
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('
