<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inaklug</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Ubuntu';
        }
        .bg-gradient-custom {
            background: linear-gradient(to right, #46074E, #197BD0);
        }
        .bg-gradient-custom-footer {
            background: linear-gradient(to right, #46074E, rgba(70, 7, 78, 0.8), #197BD0);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #197BD0;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <!-- Navbar -->
<header class="navbar py-0 bg-gradient-custom h-[80px] shadow-lg fixed w-full z-10">
    <div class="container mx-auto d-flex align-items-center h-100 px-3 text-white fw-bold">
        <!-- Logo -->
        <div class="d-flex align-items-center">
    <img src="/img/inaklug.png" alt="Inaklug Logo" class="me-2" style="width: 34px; height: auto;">
    <h1 class="fs-5 mb-0">Inaklug</h1>
</div>

        <!-- Navigation Links -->
        <nav class="d-none d-md-flex gap-4 ms-5">
            <a href="{{ url('/') }}" class="text-white text-decoration-none hover-opacity">Home</a>
            <a href="{{ url('/tentangkami') }}" class="text-white text-decoration-none hover-opacity">Tentang Kami</a>
            <a href="{{ url('/layanankami') }}" class="text-white text-decoration-none hover-opacity">Layanan Kami</a>
            <a href="{{ url('/artikel') }}" class="text-white text-decoration-none hover-opacity">Artikel</a>
            <a href="{{ url('/hubungi-kami') }}" class="text-white text-decoration-none hover-opacity">Hubungi Kami</a>
        </nav>
        <!-- Daftar Online Button -->
        <button type="button" class="ms-auto btn btn-primary px-4 py-2 rounded-pill">Daftar Online</button>
        <!-- Mobile Menu Toggle -->
        <button id="menu-toggle" class="d-md-none ms-auto btn btn-link text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="d-none bg-gradient-custom">
        <div class="d-flex flex-column text-white px-3">
            <a href="{{ url('/') }}" class="py-2 text-decoration-none hover-bg-opacity">Home</a>
            <a href="{{ url('/tentangkami') }}" class="py-2 text-decoration-none hover-bg-opacity">Tentang Kami</a>
            <a href="{{ url('/layanankami') }}" class="py-2 text-decoration-none hover-bg-opacity">Layanan Kami</a>
            <a href="{{ url('/artikel') }}" class="py-2 text-decoration-none hover-bg-opacity">Artikel</a>
            <a href="{{ url('/hubungi-kami') }}" class="py-2 text-decoration-none hover-bg-opacity">Hubungi Kami</a>
        </div>
    </nav>
</header>

<script>
    // Mobile menu toggle functionality
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('d-none');
    });
</script>


    <main>
        <!-- Hero Section -->
        <div class="position-relative mt-5" style="height: 450px;">
            <img src="/img/studytour.png" alt="" class="w-100 h-100" style="object-fit: cover;">
            <h1 class="position-absolute text-white" style="left: 9%; top: 75%; font-size: 2rem;">Hubungi Kami</h1>
        </div>

        <!-- Form Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="mb-5 ms-5 fw-bold fs-4">KIRIM PESAN</h2>
            <form id="hubungiKamiForm" action="/kirim-pesan" method="POST" class="row g-4 justify-content-center">
                @csrf
                <!-- Input Fields -->
                <div class="col-md-5">
                    <label for="nama" class="form-label fw-bold">Nama*</label>
                    <input type="text" class="form-control border-0 border-bottom" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
                </div>
                <div class="col-md-5">
                    <label for="email" class="form-label fw-bold">E-Mail*</label>
                    <input type="email" class="form-control border-0 border-bottom" id="email" name="email" placeholder="Alamat Email Anda" required>
                </div>
                <div class="col-md-5">
                    <label for="perusahaan" class="form-label fw-bold">Perusahaan / Organisasi</label>
                    <input type="text" class="form-control border-0 border-bottom" id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan / organisasi">
                </div>
                <div class="col-md-5">
                    <label for="telepon" class="form-label fw-bold">Telepon</label>
                    <input type="tel" class="form-control border-0 border-bottom" id="telepon" name="telepon" placeholder="Nomor telepon Anda">
                </div>
                <div class="col-md-10">
                    <label for="pesan" class="form-label fw-bold">Isi Pesan*</label>
                    <textarea class="form-control border-0 border-bottom" id="pesan" name="pesan" rows="5" placeholder="Isi pesan Anda ..." required></textarea>
                </div>
                <div class="col-md-10 d-flex justify-content-between align-items-center">
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    <button type="submit" class="btn btn-outline-primary px-4 py-2 rounded-pill">KIRIM PESAN</button>
                </div>
            </form>
        </div>

        <!-- Lokasi Kami Section -->
        <div class="container py-5 text-muted" style="max-width: 860px;">
            <h2 class="ms-5 fw-bold mb-5 fs-4">LOKASI KAMI</h2>
            <!-- Kantor Pusat -->
            <div class="lokasi-item mt-4 ms-5">
                <h4 class="fw-bold fs-5">KANTOR PUSAT</h4>
                <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
            </div>
            <!-- Kantor Cabang -->
            <div class="lokasi-item mt-4 ms-5">
                <h4 class="fw-bold fs-5">KANTOR CABANG</h4>
                <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
                <p><span class="fw-bold">Phone:</span> (+62 21) 398 38706 - <span class="fw-bold">Fax:</span> (+62 21) 316 1701</p>
                <p><span class="fw-bold">Hotline:</span> +6281519040071 / +62811998167</p>
            </div>
        </div>
    </main>        

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#46074E] to-[#197BD0] text-white py-4">
        <div class="container mx-auto text-center">
            <p>Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
