<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Recruitment</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="has-navbar">

    <nav class="navbar navbar-expand-lg fixed-top navbar-transition navbar-transparent">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/logoimip.png') }}" alt="IMIP Logo" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-lg-4">
                    <li class="nav-item"><a class="nav-link fw-bold text-dark text-uppercase" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold text-dark text-uppercase" href="#">About</a></li>
                    <li class="nav-item mt-3 mt-lg-0">
                        <a class="btn-imip-outline d-block d-lg-inline-block text-center text-decoration-none" href="{{ route('login') }}">
                            Register/Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <section class="section-padding d-flex align-items-center position-relative" style="min-height: 80vh;">
        <div class="container">
            <div class="row align-items-center text-center text-lg-start">
                
                <div class="col-lg-6 position-relative" style="z-index: 2;" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="display-4 fw-bold text-dark mb-4 lh-sm hero-title">
                        Membangun Masa Depan<br>
                        Industri Indonesia di <span class="text-imip-primary">IMIP</span>
                    </h1>
                    <p class="fs-10 text-muted mb-5 lh-lg" data-aos="fade-up" data-aos-delay="200">
                        Bergabunglah dengan tim kelas dunia di kawasan industri terintegrasi terbesar. 
                        Jadilah bagian dari transformasi hilirisasi mineral bangsa.
                    </p>
                    <div class="d-flex flex-column flex-lg-row gap-3 justify-content-center justify-content-lg-start align-items-center" data-aos="fade-up" data-aos-delay="400">
                        <a href="#vacancies" class="btn-imip-green shadow text-decoration-none">Cari Lowongan</a>
                        <span class="text-dark small fw-bold">
                            Sudah punya akun? <a href="#" class="text-imip-primary text-decoration-none">Login</a>
                        </span>
                    </div>
                </div>

                <div class="col-lg-6 hero-img-container d-none d-lg-block">
                    <img src="{{ asset('image/Ellipse 1.png') }}" class="hero-blob" alt="Background Shape">
                    <img src="{{ asset('image/Orang-orangan.png') }}" class="hero-figure" alt="IMIP Workers">
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding bg-white position-relative overflow-hidden">
        
        <img src="{{ asset('image/kiri.jpg') }}" 
             class="about-floating-img img-left d-none d-lg-block" 
             alt="Factory Left">

        <img src="{{ asset('image/kanan.jpg') }}" 
             class="about-floating-img img-right d-none d-lg-block" 
             alt="Factory Right">

        <div class="container position-relative" style="z-index: 2;">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center bg-white bg-opacity-10 p-rounded-4 backdrop-blur" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="fw-bold display-6 mb-2">About <span class="text-imip-primary">PT Indonesia Morowali<br>Industrial Park</span></h2>
                    <h5 class="text-uppercase text-muted fw-bold ls-1 mb-4" style="letter-spacing: 2px;">Dari Morowali untuk Indonesia</h5>
                    <p class="text-muted lh-lg mb-4" data-aos="fade-up" data-aos-delay="100">
                        Selamat datang di Kawasan Industri Indonesia Morowali Industrial Park (IMIP). Dengan fasilitas canggih dan teknologi terbaru, Kawasan Industri IMIP berdedikasi untuk mengolah sumber daya nikel yang melimpah menjadi produk berkualitas tinggi yang mendukung industri global. Di sini, kami tidak hanya berfokus pada efisiensi dan inovasi, tetapi juga keberlanjutan dan tanggung jawab lingkungan. Bergabunglah dengan kami, dan saksikan bagaimana IMIP mengubah potensi alam menjadi kemajuan nyata dan berdampak positif bagi masa depan.
                    </p>
                    <a href="#" class="btn-imip-green text-decoration-none" data-aos="zoom-in" data-aos-delay="200">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light-gray">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="hover-card p-5 border-0 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box me-3"><i class="bi bi-eye"></i></div>
                            <h3 class="fw-bold m-0">Our <span class="text-imip-primary">Vision</span></h3>
                        </div>
                        <p class="text-muted lh-lg mb-0">
                            Menjadi Kawasan Industri Berbasis Mineral Terbaik di Dunia dengan Ekosistem Bisnis yang Bernilai Tinggi, Terintegrasi, Nyaman, Aman dan Berwawasan Lingkungan.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="hover-card p-5 border-0 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box me-3"><i class="bi bi-bullseye"></i></div>
                            <h3 class="fw-bold m-0">Our <span class="text-imip-primary">Mission</span></h3>
                        </div>
                        <ul class="text-muted lh-lg mb-0 ps-3">
                            <li class="mb-2">Membangun ekosistem bisnis yang bernilai bagi pelanggan di dalam kawasan dengan layanan dan produk yang terpadu, unggul, dan andal.</li>
                            <li class="mb-2">Membangun kemitraan yang bernilai, saling menguntungkan dan berkembang bagi penyedia produk dan jasa dengan komitmen tinggi.</li>
                            <li>Mengembangkan lingkungan kawasan yang ramah, lestari dan menjaga keseimbangan ekologis melalui kolaborasi dan inovasi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="bg-imip-dark text-white p-5 rounded-4 shadow">
                        <h6 class="text-uppercase mb-3 opacity-75" style="letter-spacing: 2px;">Partnership</h6>
                        <h2 class="fw-bold mb-4">Bersama Kita Raih Kesuksesan</h2>
                        <p class="lh-lg opacity-90 mb-0">
                            Kabupaten Morowali memiliki potensi sumber daya alam yang cukup besar sebagaimana properti untuk pengembangan industri berbasis nilai tambah. Sebagaimana halnya industri berbasis nikel. Untuk menunjang kegiatan ekonomi di kawasan serta prasarana industri sebagai produk-produk turunan dari industri pengolahan nikel memiliki daya saing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <img src="{{ asset('image/Tenant.png') }}" alt="Partnership" class="img-fluid rounded-4 shadow-sm w-100 object-fit-cover">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-light-gray text-center" id="vacancies">
        <div class="container">
            <h2 class="fw-bold mb-2" data-aos="fade-down">Temukan Karir Impian Anda</h2>
            <p class="text-muted mb-5" data-aos="fade-up">Bergabunglah bersama ribuan profesional lainnya membangun industri masa depan</p>

            <div class="job-search-container d-flex gap-3 align-items-center mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="search-input-group flex-grow-1 d-flex align-items-center">
                    <i class="bi bi-search text-imip-primary me-2 fs-5"></i>
                    <input type="text" class="form-control-clean" placeholder="Cari posisi (mis: Engineer, Admin)...">
                </div>
                <div class="search-input-group flex-grow-1 d-flex align-items-center border-start-lg">
                    <i class="bi bi-geo-alt text-imip-primary me-2 fs-5"></i>
                    <select class="form-control-clean" style="cursor: pointer;">
                        <option value="" selected>Semua Lokasi</option>
                        <option value="morowali">Morowali</option>
                        <option value="kendari">Kendari</option>
                        <option value="jakarta">Jakarta</option>
                    </select>
                </div>
                <button class="btn-imip-green btn-search-mobile-full text-nowrap shadow-sm">Cari Lowongan</button>
            </div>

            <div class="d-flex flex-wrap justify-content-center gap-2 mb-5" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="badge rounded-pill bg-white text-secondary border fw-normal text-decoration-none px-3 py-2">Engineering</a>
                <a href="#" class="badge rounded-pill bg-white text-secondary border fw-normal text-decoration-none px-3 py-2">Finance</a>
                <a href="#" class="badge rounded-pill bg-white text-secondary border fw-normal text-decoration-none px-3 py-2">HR & GA</a>
                <a href="#" class="badge rounded-pill bg-white text-secondary border fw-normal text-decoration-none px-3 py-2">Safety (HSE)</a>
                <a href="#" class="badge rounded-pill bg-white text-secondary border fw-normal text-decoration-none px-3 py-2">Internship</a>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-in">
                <h5 class="fw-bold m-0">Lowongan Terbaru <span class="text-imip-primary">(3)</span></h5>
                <a href="#" class="text-decoration-none text-muted small fw-bold">Lihat Semua ></a>
            </div>

            <div class="row g-4 text-start">
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="hover-card d-flex flex-column h-100">
                        <div class="p-4 bg-light border-bottom d-flex gap-3 align-items-center">
                            <i class="bi bi-gear fs-3 text-imip-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Engineering & Konstruksi</h6>
                                <small class="text-muted"><i class="bi bi-geo-alt-fill text-danger me-1"></i> Morowali</small>
                            </div>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <div class="bg-info-subtle rounded-3 mb-3 w-100 position-relative overflow-hidden" style="height: 150px;">
                                <img src="{{ asset('image/map-placeholder.png') }}" class="w-100 h-100 object-fit-cover opacity-50" alt="Map">
                            </div>
                            <a href="#" class="text-imip-primary fw-bold text-decoration-none mt-auto d-flex align-items-center gap-2">See More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="hover-card d-flex flex-column h-100">
                        <div class="p-4 bg-light border-bottom d-flex gap-3 align-items-center">
                            <i class="bi bi-tools fs-3 text-imip-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Operasional Smelter</h6>
                                <small class="text-muted"><i class="bi bi-geo-alt-fill text-danger me-1"></i> Morowali</small>
                            </div>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <div class="bg-info-subtle rounded-3 mb-3 w-100 position-relative overflow-hidden" style="height: 150px;">
                                <img src="{{ asset('image/map-placeholder.png') }}" class="w-100 h-100 object-fit-cover opacity-50" alt="Map">
                            </div>
                            <a href="#" class="text-imip-primary fw-bold text-decoration-none mt-auto d-flex align-items-center gap-2">See More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="hover-card d-flex flex-column h-100">
                        <div class="p-4 bg-light border-bottom d-flex gap-3 align-items-center">
                            <i class="bi bi-truck fs-3 text-imip-primary"></i>
                            <div>
                                <h6 class="fw-bold mb-1">Logistik & Alat Berat</h6>
                                <small class="text-muted"><i class="bi bi-geo-alt-fill text-danger me-1"></i> Kendari</small>
                            </div>
                        </div>
                        <div class="p-4 flex-grow-1 d-flex flex-column">
                            <div class="bg-info-subtle rounded-3 mb-3 w-100 position-relative overflow-hidden" style="height: 150px;">
                                <img src="{{ asset('image/map-placeholder.png') }}" class="w-100 h-100 object-fit-cover opacity-50" alt="Map">
                            </div>
                            <a href="#" class="text-imip-primary fw-bold text-decoration-none mt-auto d-flex align-items-center gap-2">See More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-5" data-aos="fade-down">Recruitment Information</h2>
            <div class="row g-4">
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="0">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-phone"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">PENDAFTARAN DIBUKA</h6>
                        <h5 class="fw-bold mb-3">28 - 06 - 2023</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Internet Posting Rekrutmen yang terus diperbaharui</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-clipboard-check"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">SELEKSI ADMINISTRASI</h6>
                        <h5 class="fw-bold mb-3">28 - 06 - 2023</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Internet Posting Rekrutmen yang terus diperbaharui</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-exclamation-triangle"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">PENTING</h6>
                        <h5 class="fw-bold mb-3">Protokol Kesehatan</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Protokol Kesehatan Sesuai dengan Peraturan Pemerintah</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-whatsapp"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">NOTIFIKASI WHATSAPP</h6>
                        <h5 class="fw-bold mb-3">Tersedia</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Dapatkan notifikasi real-time untuk setiap update rekrutmen</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-calendar-event"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">JADWAL TEST</h6>
                        <h5 class="fw-bold mb-3">28 - 06 - 2023</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Mengikuti Perkembangan Kebutuhan Rekrutmen Kami Secara Berkala</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="hover-card p-4 text-center d-flex flex-column h-100">
                        <div class="icon-box mx-auto mb-4 bg-white border border-2 shadow-sm"><i class="bi bi-envelope"></i></div>
                        <h6 class="text-imip-primary fw-bold mb-2">KRITIK & SARAN</h6>
                        <h5 class="fw-bold mb-3">Setiap Saat</h5>
                        <p class="text-muted small mb-4 flex-grow-1">Hubungi Kami Untuk Saran dan Masukan yang Berharga</p>
                        <a href="#" class="text-imip-primary fw-bold text-decoration-none">See More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-2 border-top border-bottom bg-white" data-aos="fade-in">
        <div class="container text-center">
            <p class="text-uppercase fw-bold text-muted small mb-4 ls-1">50+ Tenant yang ada di kawasan IMIP</p>
            <div class="d-flex justify-content-center flex-wrap gap-4 align-items-center">
                <img src="{{ asset('image/image 24.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="0">
                <img src="{{ asset('image/image 25.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="50">
                <img src="{{ asset('image/image 26.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('image/image 27.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="150">
                <img src="{{ asset('image/image 28.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('image/image 29.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="250">
                <img src="{{ asset('image/image 30.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('image/image 31.png') }}" class="tenant-logo" alt="Tenant" data-aos="zoom-in" data-aos-delay="350">
            </div>
        </div>
    </section>

    <footer class="footer-imip">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="{{ asset('image/logoimip.png') }}" alt="Logo" class="mb-4" style="filter: brightness(0) invert(1); height: 40px;">
                    <p class="small opacity-75">Kawasan Industri Terintegrasi Terbesar di Indonesia.</p>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="text-white text-uppercase fw-bold mb-3">Perusahaan</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6">
                    <h6 class="text-white text-uppercase fw-bold mb-3">Lowongan</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2 small">
                        <li><a href="#">Professional</a></li>
                        <li><a href="#">Magang</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="text-white text-uppercase fw-bold mb-3">Hubungi Kami</h6>
                    <ul class="list-unstyled d-flex flex-column gap-2 small opacity-75">
                        <li>Fatufia, Bahodopi, Morowali</li>
                        <li>recruitment@imip.co.id</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary mt-5 pt-4 text-center small opacity-50">
                &copy; 2025 PT IMIP. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,   
            once: true,      
            offset: 100,     
            easing: 'ease-in-out',
        });

        const navbar = document.querySelector('.navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { 
                navbar.classList.remove('navbar-transparent');
                navbar.classList.add('navbar-scrolled');
            } else { 
                navbar.classList.add('navbar-transparent');
                navbar.classList.remove('navbar-scrolled');
            }
        });
    </script>
</body>
</html>