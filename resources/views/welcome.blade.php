<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Recruitment</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            padding-top: 100px; 
        }

        /* --- NAVBAR STYLING --- */
        .navbar {
            background-color: white;
            transition: padding 0.3s;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .navbar { padding-top: 24px; padding-bottom: 24px; }
        
        .navbar-brand img { height: 50px; }

        .nav-link {
            color: #333;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            margin-right: 24px;
        }

        .btn-register {
            border: 2px solid #333;
            color: #333;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            padding: 12px 24px;
            border-radius: 4px;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-register:hover {
            background-color: #333;
            color: white;
        }

        /* --- HERO SECTION STYLING --- */
        .hero-section {
            padding-bottom: 72px;
            position: relative;
            min-height: 80vh; 
            display: flex;
            align-items: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #000;
            line-height: 1.2;
            margin-bottom: 24px;
        }

        .hero-title span { color: #198754; }

        .hero-subtitle {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 48px;
            max-width: 90%;
            line-height: 1.6;
        }

        .btn-search-job {
            background-color: white;
            color: #000;
            font-weight: 700;
            padding: 12px 24px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            text-decoration: none;
            display: inline-block;
            border: 1px solid #eee;
        }

        .login-link {
            display: block;
            margin-top: 24px;
            color: #333;
            font-size: 0.9rem;
        }
        
        .login-link a {
            font-weight: 700;
            color: #000;
            text-decoration: none;
        }

        /* Hero Images Desktop Defaults */
        .hero-image-wrapper {
            position: relative;
            z-index: 1;
        }

        .hero-bg-shape {
            position: absolute;
            top: 60%; 
            right: -10%;
            transform: translateY(-50%);
            width: 120%;    
            height: 120%; 
            background-image: url("{{ asset('image/Ellipse 1.png') }}");
            background-size: contain; 
            background-position: center right; 
            background-repeat: no-repeat;
            z-index: -1; 
        }

        .hero-img {
            max-width: 130%; 
            height: auto;
            position: relative;
            left: -10%; 
        }

        /* --- ABOUT SECTION STYLING --- */
        .about-section {
            position: relative;
            z-index: 10; 
            padding: 100px 0;
            background-color: white;
            overflow: hidden;
        }

        .about-heading {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 12px;
            color: #000;
        }
        
        .about-heading span { color: #198754; }

        .about-subheading {
            color: #666;
            font-weight: 600;
            margin-bottom: 36px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .about-text {
            color: #555;
            line-height: 1.8;
            margin-bottom: 36px;
            font-size: 1rem;
            text-align: center;
        }

        .btn-about {
            background-color: #198754;
            color: white;
            padding: 12px 36px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
        }

        .about-img-side {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 500px;
            width: auto;
            max-width: 300px;
            object-fit: cover;
            z-index: 1; 
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        @media (max-width: 1400px) {
            .about-img-side {
                height: 350px; 
                max-width: 200px;
            }
        }

        @media (max-width: 1200px) {
            .about-img-side {
                opacity: 0; 
                pointer-events: none;
            }
        }

        .about-img-left {
            left: 5%;
            transform: translateY(-50%) perspective(800px) rotateY(15deg) rotateX(-5deg);
        }

        .about-img-right {
            right: 5%;
            transform: translateY(-50%) perspective(800px) rotateY(-25deg) rotateX(-5deg);
        }

        .container.position-relative { z-index: 2; }
        .vision-mission-section { padding-bottom: 100px; position: relative; z-index: 2; }

        .vm-card {
            background-color: #f8f9fa;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .vm-card:hover { 
            transform: translateY(-5px); 
        }

        .vm-header { 
            display: flex; 
            align-items: center; 
            gap: 15px; 
            margin-bottom: 24px; 
        }

       .vm-icon-box {
        width: 60px;
        height: 60px;
        background-color: #e8f5e9; 
        color: #198754;          
        border-radius: 12px;      
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;           /* Ukuran Icon */
        margin-right: 15px;
        flex-shrink: 0;            /* Agar icon tidak gepeng saat layar kecil */
        transition: all 0.3s ease;
    }

    /* Efek Hover pada Card mempengaruhi Icon */
    .vm-card:hover .vm-icon-box {
        background-color: #198754; /* Background jadi hijau tua */
        color: white;              /* Icon jadi putih */
        transform: rotateY(360deg); /* Efek putar sedikit (opsional, aesthetic) */
    }

    /* Pastikan header tetap rapi */
    .vm-header {
        display: flex;
        align-items: center;
        margin-bottom: 24px;
    }

        .vm-title { 
            font-size: 2rem; 
            font-weight: 700; 
            margin: 0; 
            color: #000; 
        }
        
        .vm-title span { 
            color: #198754; 
        }

        .vm-text { 
            color: #555; 
            line-height: 1.6; 
            font-size: 0.95rem; 
        }

        .vm-list { 
            padding-left: 20px; 
            margin: 0; 
            color: #555; 
        }

        .vm-list li { 
            margin-bottom: 12px; 
            line-height: 1.6; 
        }

        /* Bersama Kita Section */
        .bersama-kita-section { padding: 80px 0; background-color: #fff; }
        .bersama-kita-content { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center; }
        .bersama-kita-text { background-color: #03624C; color: white; padding: 60px 40px; border-radius: 20px; }
        .bersama-kita-title { font-size: 2.2rem; font-weight: 700; margin-bottom: 24px; line-height: 1.3; }
        .bersama-kita-subtitle { font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 20px; opacity: 0.9; }
        .bersama-kita-desc { font-size: 0.95rem; line-height: 1.7; margin-bottom: 24px; }
        .bersama-kita-img { border-radius: 20px; width: 100%; height: auto; object-fit: cover; }

        .mulailah-karir-section {
            padding: 60px 0 40px 0; 
            background-color: #f8f9fa; 
            text-align: center;
            position: relative;
        }

        .mulailah-karir-title {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #000;
        }

        .mulailah-karir-subtitle {
            font-size: 1rem;
            color: #666;
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* --- Search Bar Styling --- */
        .job-search-container {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            gap: 15px;
            align-items: center;
            border: 1px solid #eee;
        }

        .search-input-group {
            flex: 1;
            display: flex;
            align-items: center;
            background: #f8f9fa;
            border-radius: 8px;
            padding: 10px 15px;
            border: 1px solid transparent;
            transition: border-color 0.3s;
        }

        .search-input-group:focus-within {
            border-color: #198754;
            background: white;
        }

        .search-icon {
            color: #198754;
            margin-right: 10px;
            font-size: 18px;
        }

        .form-control-clean {
            border: none;
            background: transparent;
            width: 100%;
            outline: none;
            font-size: 14px;
            color: #333;
            padding: 0;
        }

        .form-control-clean::placeholder { color: #999; }

        .btn-search-main {
            background-color: #198754;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 8px;
            border: none;
            transition: all 0.3s;
            white-space: nowrap;
        }

        .btn-search-main:hover {
            background-color: #146c43;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.2);
        }

        /* Kategori Cepat (Pills) */
        .quick-tags {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .tag-pill {
            background: white;
            border: 1px solid #e0e0e0;
            color: #666;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
            text-decoration: none;
            transition: all 0.2s;
        }

        .tag-pill:hover {
            border-color: #198754;
            color: #198754;
            background: #f0fdf4;
        }

        @media (max-width: 768px) {
            .job-search-container {
                flex-direction: column;
                padding: 15px;
            }
            .search-input-group {
                width: 100%;
            }
            .btn-search-main {
                width: 100%;
            }
        }
        .latest-vacancies-section { padding: 80px 0; background-color: white; }
        .vacancy-card { border: none; border-radius: 20px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.08); height: 100%; display: flex; flex-direction: column; }
        .vacancy-card:hover { transform: translateY(-8px); box-shadow: 0 8px 25px rgba(0,0,0,0.12); }
        .vacancy-card-header { background-color: #f8f9fa; padding: 30px 24px; border-bottom: 1px solid #e9ecef; display: flex; align-items: flex-start; gap: 15px; flex: 0 0 auto; }
        .vacancy-title { font-size: 1.2rem; font-weight: 700; margin-bottom: 4px; color: #000; min-height: 2.4em; display: flex; align-items: center; }
        .vacancy-card-body { padding: 30px 24px; flex: 1 1 auto; display: flex; flex-direction: column; justify-content: space-between; }
        .vacancy-map { width: 100%; height: 180px; background: linear-gradient(135deg, #b3e5fc 0%, #81d4fa 100%); border-radius: 12px; margin-bottom: 20px; }
        .see-more-link { color: #198754; text-decoration: none; font-weight: 600; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 6px; }

        /* Recruitment*/
        .recruitment-info-section { padding: 80px 0; background-color: #f8f9fa; }
        .recruitment-info-title { font-size: 2rem; font-weight: 700; margin-bottom: 60px; text-align: center; color: #000; }
        .info-card { background-color: white; border-radius: 16px; padding: 30px 24px; text-align: center; border: 1px solid #e9ecef; transition: transform 0.3s ease, border-color 0.3s ease; height: 100%; display: flex; flex-direction: column; justify-content: space-between; }
        .info-card:hover { border-color: #198754; transform: translateY(-4px); }
        .info-icon-large { width: 60px; height: 60px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 28px; }
        .info-card-title { font-size: 1rem; font-weight: 700; margin-bottom: 12px; color: #198754; text-transform: uppercase; letter-spacing: 0.5px; }
        .info-card-date { font-size: 1.1rem; font-weight: 700; margin-bottom: 12px; color: #000; }
        .info-card-desc { font-size: 0.85rem; color: #666; margin-bottom: 16px; line-height: 1.5; flex-grow: 1; }
        .info-card-link { color: #198754; text-decoration: none; font-weight: 600; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 4px; }

        /* Footer & Tenants */
        .footer { background-color: #03624C; color: #b0b0b0; padding-top: 60px; padding-bottom: 30px; font-size: 14px; }
        .footer-logo { height: 40px; margin-bottom: 24px; filter: brightness(0) invert(1); }
        .footer-title { color: #ffffff; font-weight: 700; font-size: 16px; margin-bottom: 24px; text-transform: uppercase; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #b0b0b0; text-decoration: none; }
        .footer-links a:hover { color: #198754; padding-left: 5px; }
        .footer-bottom { margin-top: 48px; padding-top: 24px; border-top: 1px solid #333; text-align: center; }
        .tenants-section { padding: 40px 0; background-color: white; border-bottom: 1px solid #e9ecef; }
        .tenants-title { font-size: 0.85rem; font-weight: 600; text-transform: uppercase; color: #999; margin-bottom: 20px; text-align: center; }
        .tenants-logos { display: flex; justify-content: center; align-items: center; gap: 30px; flex-wrap: wrap; }
        .tenant-logo { height: 40px; object-fit: contain; opacity: 0.7; transition: opacity 0.3s; }
        .tenant-logo:hover { opacity: 1; }


        @media (max-width: 991px) {
            body {
                padding-top: 90px;
            }
            
            .navbar {
                padding-top: 15px;
                padding-bottom: 15px;
            }

            .navbar-collapse {
                background-color: white;
                padding: 20px;
                border-top: 1px solid #eee;
                margin-top: 10px;
                max-height: 80vh;
                overflow-y: auto;
            }
            
            .nav-link { margin-right: 0; margin-bottom: 10px; }
            .btn-register { width: 100%; text-align: center; display: block; margin-top: 15px; }

           
            .hero-section {
                text-align: center;
                padding-bottom: 40px;
                display: block; 
                min-height: auto;
            }

            .hero-title {
                font-size: 2.5rem;
                margin-top: 20px;
            }
            /* Adjust Grid Layouts */
            .bersama-kita-content {
                grid-template-columns: 1fr;
            }
            
            .bersama-kita-text {
                padding: 30px 20px;
            }

            /* Font Size Adjustments */
            .about-heading, .mulailah-karir-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <img src="{{ asset('image/logoimip.png') }}" alt="IMIP Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABOUT</a></li>
                    <a class="btn-register" href="{{ route('login') }}">REGISTER/LOGIN</a>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h1 class="hero-title">
                        Membangun Masa Depan<br>
                        Industri Indonesia di <span>IMIP</span>
                    </h1>
                    <p class="hero-subtitle">
                        Bergabunglah dengan tim kelas dunia di kawasan industri terintegrasi terbesar. 
                        Jadilah bagian dari transformasi hilirisasi mineral bangsa.
                    </p>
                    <div><a href="#" class="btn-search-job">Cari Lowongan</a></div>
                    <span class="login-link">Sudah punya akun? <a href="#">Login</a></span>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <div class="hero-image-wrapper">
                        <div class="hero-bg-shape"></div>
                        <img src="{{ asset('image/Orang-orangan.png') }}" alt="IMIP Workers" class="hero-img img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-section">
        <img src="{{ asset('image/kiri.jpg') }}" 
             class="about-img-side about-img-left d-none d-lg-block" 
             alt="Factory Left">

        <img src="{{ asset('image/kanan.jpg') }}" 
             class="about-img-side about-img-right d-none d-lg-block" 
             alt="Factory Right">

        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="about-heading">
                        About <span>PT Indonesia Morowali<br>Industrial Park</span>
                    </h2>
                    <h5 class="about-subheading">Dari Morowali untuk Indonesia</h5>
                    
                    <p class="about-text">
                        Selamat datang di Kawasan Industri Indonesia Morowali Industrial Park (IMIP). Dengan fasilitas canggih dan teknologi terbaru, Kawasan Industri IMIP berdedikasi untuk mengolah sumber daya nikel yang melimpah menjadi produk berkualitas tinggi yang mendukung industri global. Di sini, kami tidak hanya berfokus pada efisiensi dan inovasi, tetapi juga keberlanjutan dan tanggung jawab lingkungan. Bergabunglah dengan kami, dan saksikan bagaimana IMIP mengubah potensi alam menjadi kemajuan nyata dan berdampak positif bagi masa depan.
                    </p>

                    <a href="#" class="btn-about">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="vision-mission-section">
        <div class="container">
            <div class="row g-4"> 
                
                <div class="col-lg-6">
                    <div class="vm-card">
                        <div class="vm-header">
                            <div class="vm-icon-box">
                                <i class="bi bi-eye"></i>
                            </div>
                            
                            <h3 class="vm-title">Our <span>Vision</span></h3>
                        </div>
                        <p class="vm-text">
                            Menjadi Kawasan Industri Berbasis Mineral Terbaik di Dunia dengan Ekosistem Bisnis yang Bernilai Tinggi, Terintegrasi, Nyaman, Aman dan Berwawasan Lingkungan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="vm-card">
                        <div class="vm-header">
                            <div class="vm-icon-box">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            
                            <h3 class="vm-title">Our <span>Mission</span></h3>
                        </div>
                        <ul class="vm-list">
                            <li>Membangun ekosistem bisnis yang bernilai bagi pelanggan di dalam kawasan dengan layanan dan produk yang terpadu, unggul, dan andal.</li>
                            <li>Membangun kemitraan yang bernilai, saling menguntungkan dan berkembang bagi penyedia produk dan jasa dengan komitmen tinggi.</li>
                            <li>Mengembangkan lingkungan kawasan yang ramah, lestari dan menjaga keseimbangan ekologis melalui kolaborasi dan inovasi.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Added Bersama Kita Raih Kesuksesan section -->
    <section class="bersama-kita-section">
        <div class="container">
            <div class="bersama-kita-content">
                <div class="bersama-kita-text">
                    <h6 class="bersama-kita-subtitle">Partnership</h6>
                    <h2 class="bersama-kita-title">Bersama Kita Raih Kesuksesan</h2>
                    <p class="bersama-kita-desc">
                        Kabupaten Morowali memiliki potensi sumber daya alam yang cukup besar sebagaimana properti untuk pengembangan industri berbasis nilai tambah. Sebagaimana halnya industri berbasis nikel. Untuk menunjang kegiatan ekonomi di kawasan serta prasarana industri sebagai produk-produk turunan dari industri pengolahan nikel memiliki daya saing.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('image/Tenant.png') }}" alt="Partnership" class="bersama-kita-img">
                </div>
            </div>
        </div>
    </section>

    <section class="mulailah-karir-section">
        <div class="container">
            <h2 class="mulailah-karir-title">Temukan Karir Impian Anda</h2>
            <p class="mulailah-karir-subtitle">
                Bergabunglah bersama ribuan profesional lainnya membangun industri masa depan
            </p>

            <div class="job-search-container">
                <div class="search-input-group">
                    <span class="search-icon">🔍</span>
                    <input type="text" class="form-control-clean" placeholder="Cari posisi (mis: Engineer, Admin)...">
                </div>

                <div class="search-input-group border-start-lg">
                    <span class="search-icon">📍</span>
                    <select class="form-control-clean" style="cursor: pointer;">
                        <option value="" selected>Semua Lokasi</option>
                        <option value="morowali">Morowali</option>
                        <option value="kendari">Kendari</option>
                        <option value="jakarta">Jakarta</option>
                    </select>
                </div>

                <button class="btn-search-main">Cari Lowongan</button>
            </div>

            <div class="quick-tags">
                <a href="#" class="tag-pill">Engineering</a>
                <a href="#" class="tag-pill">Finance</a>
                <a href="#" class="tag-pill">HR & GA</a>
                <a href="#" class="tag-pill">Safety (HSE)</a>
                <a href="#" class="tag-pill">Internship</a>
            </div>
        </div>
    </section>

    <section class="latest-vacancies-section pt-4"> <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold m-0">Lowongan Terbaru <span class="text-success">(3)</span></h5>
                <a href="#" class="text-decoration-none text-muted small">Lihat Semua ></a>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    </div>
                </div>
        </div>
    </section>

<section class="latest-vacancies-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Lowongan Terbaru</h2>
                <p class="text-muted">Bergabunglah dengan tim kami di berbagai posisi</p>
            </div>

            <div class="row g-4"> 
                
                <div class="col-lg-4 col-md-6">
                    <div class="vacancy-card">
                        <div class="vacancy-card-header">
                            <div class="vacancy-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="vacancy-title">Engineering & Konstruksi</h5>
                                <p class="vacancy-location">
                                    <span>📍</span> Morowali
                                </p>
                            </div>
                        </div>
                        <div class="vacancy-card-body">
                            <div class="vacancy-map" style="background-image: url('{{ asset('image/map-placeholder.png') }}'); background-color: #e0f2f1;"></div>
                            <a href="#" class="see-more-link">See More →</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="vacancy-card">
                        <div class="vacancy-card-header">
                            <div class="vacancy-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M2 22h20M2 11l5-5 5 5 5-5 5 5M4 22V11M20 22V11M12 22v-6"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="vacancy-title">Operasional Smelter</h5>
                                <p class="vacancy-location">
                                    <span>📍</span> Morowali
                                </p>
                            </div>
                        </div>
                        <div class="vacancy-card-body">
                            <div class="vacancy-map" style="background-image: url('{{ asset('image/map-placeholder.png') }}'); background-color: #e0f2f1;"></div>
                            <a href="#" class="see-more-link">See More →</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="vacancy-card">
                        <div class="vacancy-card-header">
                            <div class="vacancy-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                            <div>
                                <h5 class="vacancy-title">Logistik & Alat Berat</h5>
                                <p class="vacancy-location">
                                    <span>📍</span> Kendari
                                </p>
                            </div>
                        </div>
                        <div class="vacancy-card-body">
                            <div class="vacancy-map" style="background-image: url('{{ asset('image/map-placeholder.png') }}'); background-color: #e0f2f1;"></div>
                            <a href="#" class="see-more-link">See More →</a>
                        </div>
                    </div>
                </div>

            </div> </div>
    </section>

    <!-- Added Recruitment Information section -->
    <section class="recruitment-info-section">
        <div class="container">
            <h2 class="recruitment-info-title">Recruitment Information</h2>
            <div class="row g-4">
                <!-- Info Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">📱</div>
                        <h6 class="info-card-title">PENDAFTARAN DIBUKA</h6>
                        <p class="info-card-date">28 - 06 - 2023</p>
                        <p class="info-card-desc">
                            Internet Posting Rekrutmen yang terus diperbaharui
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>

                <!-- Info Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">📋</div>
                        <h6 class="info-card-title">SELEKSI ADMINISTRASI</h6>
                        <p class="info-card-date">28 - 06 - 2023</p>
                        <p class="info-card-desc">
                            Internet Posting Rekrutmen yang terus diperbaharui
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>

                <!-- Info Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">⚠️</div>
                        <h6 class="info-card-title">PENTING</h6>
                        <p class="info-card-date">Penting</p>
                        <p class="info-card-desc">
                            Protokol Kesehatan Sesuai dengan Peraturan Pemerintah
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>

                <!-- Info Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">📞</div>
                        <h6 class="info-card-title">LAYANAN NOTIFIKASI WHATSAPP</h6>
                        <p class="info-card-date">Tersedia</p>
                        <p class="info-card-desc">
                            Dapatkan notifikasi real-time untuk setiap update rekrutmen
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>

                <!-- Info Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">📅</div>
                        <h6 class="info-card-title">JADWAL TEST</h6>
                        <p class="info-card-date">28 - 06 - 2023</p>
                        <p class="info-card-desc">
                            Mengikuti Perkembangan Kebutuhan Rekrutmen Kami Secara Berkala
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>

                <!-- Info Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="info-card">
                        <div class="info-icon-large">✉️</div>
                        <h6 class="info-card-title">KRITIK & SARAN</h6>
                        <p class="info-card-date">Setiap Saat</p>
                        <p class="info-card-desc">
                            Hubungi Kami Untuk Saran dan Masukan yang Berharga
                        </p>
                        <a href="#" class="info-card-link">See More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Updated tenants section with proper styling and tenant logos -->
    <section class="tenants-section">
        <div class="container">
            <p class="tenants-title">50+ Tenant yang ada di kawasan IMIP</p>
            <div class="tenants-logos">
                <img src="{{ asset('image/image 24.png') }}" alt="Tenant 1" class="tenant-logo">
                <img src="{{ asset('image/image 25.png') }}" alt="Tenant 2" class="tenant-logo">
                <img src="{{ asset('image/image 26.png') }}" alt="Tenant 3" class="tenant-logo">
                <img src="{{ asset('image/image 27.png') }}" alt="Tenant 4" class="tenant-logo">
                <img src="{{ asset('image/image 28.png') }}" alt="Tenant 5" class="tenant-logo">
                <img src="{{ asset('image/image 29.png') }}" alt="Tenant 6" class="tenant-logo">
                <img src="{{ asset('image/image 30.png') }}" alt="Tenant 7" class="tenant-logo">
                <img src="{{ asset('image/image 31.png') }}" alt="Tenant 8" class="tenant-logo">
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <img src="{{ asset('image/logoimip.png') }}" alt="IMIP Logo" class="footer-logo">
                    <p>Kawasan Industri Terintegrasi Terbesar di Indonesia.</p>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Perusahaan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="footer-title">Lowongan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Professional</a></li>
                        <li><a href="#">Magang</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="footer-title">Hubungi Kami</h5>
                    <ul class="footer-links">
                        <li>Fatufia, Bahodopi, Morowali</li>
                        <li>recruitment@imip.co.id</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2025 PT IMIP. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
