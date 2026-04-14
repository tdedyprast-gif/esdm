<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESDM - STKIP PGRI Pacitan</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts Poppins (Link Aktif) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --sky-blue: #87CEEB;
            --deep-sky-blue: #00BFFF;
            --white: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: var(--sky-blue);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--sky-blue), var(--deep-sky-blue));
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .feature-box {
            border: none;
            transition: 0.3s;
            padding: 20px;
            border-radius: 15px;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            border-top: 5px solid var(--sky-blue);
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">ESDM STKIP PGRI Pacitan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#fitur">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-light text-primary ms-lg-3 px-4" href="hrd/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section" id="beranda">
        <div class="container">
            <h1 class="display-4 fw-bold">Aplikasi Sumber Daya</h1>
            <p class="lead">Kelola data sumber daya dan administrasi pegawai STKIP PGRI Pacitan dengan lebih mudah dan cepat.</p>
            <a href="#fitur" class="btn btn-light btn-lg text-primary mt-3">Pelajari Selengkapnya</a>
        </div>
    </header>

    <!-- Fitur Section -->
    <section class="py-5" id="fitur">
        <div class="container text-center">
            <h2 class="mb-5">Layanan Unggulan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 feature-box">
                        <h3 class="mb-3">📊 Data Terpadu</h3>
                        <p>Akses informasi akademik mahasiswa dalam satu platform yang terintegrasi.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-box">
                        <h3 class="mb-3">⚡ Cepat & Akurat</h3>
                        <p>Pemrosesan data yang efisien untuk mendukung pengambilan keputusan kampus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 feature-box">
                        <h3 class="mb-3">🔒 Keamanan Data</h3>
                        <p>Perlindungan data sensitif mahasiswa dengan standar keamanan tinggi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 STKIP PGRI Pacitan - Kampus PENDIDIK Pembina Pramuka. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts: JQUERY DULU BARU BOOTSTRAP JS -->
    <!-- 1. Panggil jQuery Versi Lengkap (Bukan Slim) -->
    <script src="https://jquery.com"></script>

    <!-- 2. Panggil Bootstrap Bundle JS (Sudah termasuk Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- 3. Skrip Custom Anda -->
    <script>
        $(document).ready(function() {
            // Skrip smooth scroll jQuery
            $('.navbar-nav a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70
                    }, 800);

                    // Otomatis menutup menu mobile setelah diklik
                    $('.navbar-collapse').collapse('hide');
                }
            });
        });
    </script>

</body>

</html>