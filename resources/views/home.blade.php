<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="font-ubuntu">
    <header class="navbar py-0 bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] h-[80px] shadow-lg fixed top-0 left-0 w-full z-50">   
        <div class="container mx-auto flex items-center h-full px-5 text-white font-bold">
            <div class="flex items-center">
                <img src="/img/inaklug.png" alt="Inaklug Logo" class="h-[50px] mr-3">
                <h1 class="text-xl sm:text-2xl">Inaklug</h1>
            </div>

            <div class="ml-auto md:hidden">
                <button onclick="toggleMenu()" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <nav class="hidden md:flex gap-5 text-sm ml-10">
                <a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a>
                <a href="/tentangkami" class="hover:text-gray-200 transition-colors duration-300">Tentang Kami</a>
                <a href="/layanankami" class="hover:text-gray-200 transition-colors duration-300">Layanan Kami</a>
                <a href="/artikel" class="hover:text-gray-200 transition-colors duration-300">Artikel</a>
                <a href="/hubungi-kami" class="hover:text-gray-200 transition-colors duration-300">Hubungi Kami</a>
            </nav>

            <button type="button" class="hidden md:block ml-auto px-4 sm:px-6 py-2 bg-[#1C5194] text-white rounded-full hover:bg-blue-700 transition-all duration-300">
                Daftar Online
            </button>
        </div>

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

    <main class="pt-[80px]">
        <!-- Body 1 with Overlay Box -->
        <div class="relative w-full h-[400px] sm:h-[550px] bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0]">
            <img src="/img/picgedung.png" class="h-full w-full object-cover" alt="Background Image">
            
            <!-- Overlay Box with Text and Button -->
            <div class="absolute bottom-[15%] left-[10%] sm:left-[5%] bg-gradient-to-r from-purple-900 to-blue-600 bg-opacity-80 text-white p-5 rounded-md shadow-lg flex items-center">
                <div class="text-lg sm:text-xl font-semibold mr-8">
                    INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?
                </div>
                <button class="px-4 py-2 bg-transparent border border-white rounded-full text-white font-semibold hover:bg-white hover:text-blue-600 transition duration-300 flex items-center">
                    SELENGKAPNYA
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L12 14.586l5.293-5.293a1 1 0 111.414 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </main>
</body>
</html>
<div class="container mx-auto py-16 text-center">
    <h2 class="text-2xl font-semibold mb-4">TENTANG KAMI</h2>
    <p class="text-gray-700 max-w-xl mx-auto">
        INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
    </p>
</div>
<div class="container mx-auto py-16 text-center">
    <h2 class="text-2xl font-semibold mb-8">LAYANAN KAMI</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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

<div class="container mx-auto py-16 text-center">
    <h2 class="text-2xl font-semibold mb-8">MITRA KAMI</h2>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
        <div class="p-4 border rounded-lg">
            <img src="/img/m1.jpg" alt="424 Aviation" class="mx-auto">
        </div>
        <div class="p-4 border rounded-lg">
            <img src="/img/m2.jpg" alt="St. Andrew's College" class="mx-auto">
        </div>
        <div class="p-4 border rounded-lg">
            <img src="/img/m3.jpg" alt="HTW Berlin" class="mx-auto">
        </div>
        <div class="p-4 border rounded-lg">
            <img src="/img/m4.jpg" alt="Study Group" class="mx-auto">
        </div>
    </div>

    <div class="mt-16">
    <div class="relative bg-cover bg-center text-white py-24 px-12 rounded-lg inline-block w-full max-w-4xl mx-auto flex items-center justify-between" style="background-image: url('/img/your-background-image.jpg');">
        <div class="bg-gradient-to-r from-purple-800 to-blue-600 opacity-90 absolute inset-0 rounded-lg"></div>
        <div class="relative z-10">
            <h3 class="text-3xl font-bold mb-4">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
            <p class="text-lg">Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
        </div>
        <button class="relative z-10 px-8 py-3 bg-blue-500 hover:bg-blue-700 text-white rounded-full transition duration-300 text-lg font-semibold ml-6">
            MULAI KONSULTASI
        </button>
    </div>
</div>

<div class="container mx-auto py-16 text-center">
    <h2 class="text-2xl font-semibold mb-8">ARTIKEL TERBARU</h2>
    
    <!-- Article Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Article 1 -->
        <div class="relative">
            <img src="/img/a1.jpg" alt="5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman" class="w-full h-48 object-cover rounded-lg">
            <p class="mt-4 text-sm font-semibold">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
        </div>
        
        <!-- Article 2 -->
        <div class="relative">
            <img src="/img/a2.jpg" alt="Uni Eropa Menghadapi Virus Korona" class="w-full h-48 object-cover rounded-lg">
            <p class="mt-4 text-sm font-semibold">Uni Eropa Menghadapi Virus Korona</p>
        </div>
        
        <!-- Article 3 -->
        <div class="relative">
            <img src="/img/a3.jpg" alt="Belajar Bahasa Jerman Bersama Goethe Institut" class="w-full h-48 object-cover rounded-lg">
            <p class="mt-4 text-sm font-semibold">Belajar Bahasa Jerman Bersama Goethe Institut</p>
        </div>
        
        <!-- Article 4 -->
        <div class="relative">
            <img src="/img/a4.jpg" alt="Apa Itu Gates Cambridge? Yuk Cari Tahu" class="w-full h-48 object-cover rounded-lg">
            <p class="mt-4 text-sm font-semibold">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
        </div>
    </div>

    <!-- Button to View More Articles -->
    <div class="mt-8">
        <button class="px-6 py-2 bg-transparent border-2 border-blue-500 rounded-full text-blue-500 hover:bg-blue-500 hover:text-white transition duration-300 font-semibold">
            ARTIKEL LAINNYA
        </button>
    </div>
</div>
<!-- Bagian Hubungi Kami -->
<section id="hubungi-kami" class="py-10">
        <div class="text-center mb-6">
            <h3 class="text-3xl font-bold mb-2">Hubungi Kami</h3>
            <p>Kantor Pusat</p>
            <p>Mula by Galeria Jakarta, Cilandak Town Square, Lt. Basement.</p>
            <p>Phone: 082367634052</p>
        </div>

        <div class="text-center mt-10">
            <button class="px-6 py-2 text-white bg-gradient-to-r from-[#46074E] via-[#46074Ecc] to-[#197BD0] rounded-full hover:from-[#5a0961] hover:to-[#2184e3]">
                Lokasi Kami
            </button>            
            <a href="#kirim-pesan" class="px-6 py-2 border border-purple-500 text-purple-500 rounded-full hover:bg-purple-500 hover:text-white">Kirim Pesan</a>
        </div>

        <div class="separator"></div>
    </section>

        <!-- Footer -->
        <footer class="bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white py-4">
        <div class="container mx-auto text-center">
            <p>Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

</body>
</html>
