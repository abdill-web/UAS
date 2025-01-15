<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="font-ubuntu">
    <!-- Header/Navbar -->
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

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="relative mt-[80px]" style="height: 450px;">
            <img src="/img/studytour.png" alt="" class="w-full h-full object-cover">
            <h1 class="absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">Hubungi Kami</h1>
        </section>

<!-- Form Section -->
<div class="container py-5 max-w-4xl mx-auto text-center">
    <h2 class="mb-10 font-bold text-lg">KIRIM PESAN</h2>
    <form id="hubungiKamiForm" class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
            <label for="nama" class="block font-bold mb-2">Nama</label>
            <input type="text" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-500" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
        </div>
        <div>
            <label for="email" class="block font-bold mb-2">E-Mail</label>
            <input type="email" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-500" id="email" name="email" placeholder="Alamat Email Anda" required>
        </div>
        <div>
            <label for="perusahaan" class="block font-bold mb-2">Perusahaan / Organisasi</label>
            <input type="text" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-500" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan / organisasi">
        </div>
        <div>
            <label for="telepon" class="block font-bold mb-2">Telepon</label>
            <input type="tel" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-500" id="telepon" name="telepon" placeholder="Nomor telepon Anda">
        </div>
        <div class="md:col-span-2">
            <label for="pesan" class="block font-bold mb-2">Isi Pesan</label>
            <textarea class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-500" id="pesan" name="pesan" rows="5" placeholder="Isi pesan Anda ..." required></textarea>
        </div>
        <!-- Tambahkan reCAPTCHA -->
        <div class="md:col-span-2 text-center">
            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        </div>
        <div class="md:col-span-2 flex justify-end">
            <button type="button" id="submitPesan" class="px-6 py-2 bg-blue-500 text-white rounded-full hover:bg-blue-700">KIRIM PESAN</button>
        </div>
    </form>
</div>

        <!-- Lokasi Kami Section -->
        <section class="container py-5 text-muted max-w-[860px]">
            <h2 class="ms-5 font-bold mb-5 text-lg">LOKASI KAMI</h2>
            <!-- Kantor Pusat -->
            <div class="mt-4 ms-5">
                <h4 class="font-bold text-md">KANTOR PUSAT</h4>
                <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p><span class="font-bold">Phone:</span> (+62 21) 398 38706 - <span class="font-bold">Fax:</span> (+62 21) 316 1701</p>
                <p><span class="font-bold">Hotline:</span> +6281519040071 / +62811998167</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white py-4">
        <div class="container mx-auto text-center">
            <p>Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <script>
    $(document).ready(function () {
        // Setup CSRF Token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Toggle Mobile Menu
        window.toggleMenu = function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        };

        // Submit Form
        $('#submitPesan').on('click', function () {
            const formData = {
                nama: $('#nama').val(),
                email: $('#email').val(),
                perusahaan: $('#perusahaan').val(),
                telepon: $('#telepon').val(),
                pesan: $('#pesan').val()
            };

            $.ajax({
                url: '/hubungi-kami', // Sesuaikan dengan route
                type: 'POST',
                data: formData,
                success: function (response) {
                    alert('Pesan Anda berhasil dikirim!');
                    window.location.href = '/'; // Redirect ke halaman utama
                },
                error: function (xhr) {
                    const errorMsg = xhr.responseJSON?.message || 'Terjadi kesalahan, silakan coba lagi nanti.';
                    alert(errorMsg);
                }
            });
        });
    });
</script>


</body>
</html>
