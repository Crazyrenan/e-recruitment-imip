@extends('layouts.dashboard')

@section('content')

{{-- 1. WELCOME HERO SECTION --}}
<div class="card-dashboard border-0 shadow-sm mb-4 position-relative overflow-hidden" 
     style="background: linear-gradient(135deg, #ffffff 0%, #f8fcfb 100%); border-left: 5px solid #198754;" 
     data-aos="fade-down">
    
    {{-- Background Decoration (Abstract Shapes) --}}
    <div style="position: absolute; top: -20px; right: -20px; width: 150px; height: 150px; background: rgba(25, 135, 84, 0.05); border-radius: 50%;"></div>
    <div style="position: absolute; bottom: -30px; left: 20%; width: 100px; height: 100px; background: rgba(3, 98, 76, 0.03); border-radius: 50%;"></div>

    <div class="d-flex justify-content-between align-items-center position-relative z-1 p-2">
        <div>
            <h6 class="text-muted text-uppercase fw-bold mb-1" style="font-size: 0.75rem; letter-spacing: 1px;">Dashboard Pelamar</h6>
            <h2 class="fw-bold mb-2 text-dark">Welcome back, <span class="text-imip">Jonathan!</span></h2>
            <p class="text-muted mb-4" style="max-width: 500px;">
                Pantau progres lamaran Anda dan lengkapi data administrasi untuk melanjutkan ke tahap seleksi berikutnya.
            </p>
            
            {{-- Call to Action Mini --}}
            <a href="{{ route('dashboard.status') }}" class="btn btn-sm btn-imip-green shadow-sm px-4 rounded-pill">
                Cek Status Lamaran <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
        
        {{-- Illustration --}}
        <div class="d-none d-md-block" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{ asset('image/dashboard icon.png') }}" 
                 style="height: 160px; width: auto; filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));" 
                 alt="Welcome Illustration">
        </div>
    </div>
</div>

<div class="row g-4">
    
    {{-- 2. LEFT COLUMN: VISUAL CAROUSEL --}}
<div class="col-lg-5" data-aos="fade-right" data-aos-delay="100">
    <div class="card-dashboard p-0 overflow-hidden border-0 shadow-sm h-100 position-relative">
        <div id="dashboardHeroCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
            
            <div class="carousel-indicators mb-3">
                <button type="button" data-bs-target="#dashboardHeroCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#dashboardHeroCarousel" data-bs-slide-to="1"></button>
            </div>

            <div class="carousel-inner h-100">
                {{-- Slide 1: Branding --}}
                <div class="carousel-item active h-100" data-bs-interval="5000">
                    <img src="{{ asset('image/dashboard.jpeg') }}" class="d-block w-100 h-100" style="object-fit: cover; min-height: 400px;" alt="IMIP Area">
                    <div class="carousel-caption text-start p-4" style="background: linear-gradient(to top, rgba(3, 98, 76, 0.9), transparent); left:0; right:0; bottom:0;">
                        <span class="badge bg-warning text-dark mb-2">Did You Know?</span>
                        <h5 class="fw-bold text-white mb-1">Pusat Nikel Terbesar</h5>
                        <p class="small text-white-90 mb-0">IMIP berkontribusi signifikan terhadap hilirisasi mineral di Indonesia.</p>
                    </div>
                </div>
                
                {{-- Slide 2: Tips (Memberi Nilai Tambah) --}}
                <div class="carousel-item h-100" data-bs-interval="5000">
                    <img src="{{ asset('image/smelter.jpg') }}" class="d-block w-100 h-100" style="object-fit: cover; min-height: 400px;" alt="Safety">
                    <div class="carousel-caption text-start p-4" style="background: linear-gradient(to top, rgba(3, 98, 76, 0.9), transparent); left:0; right:0; bottom:0;">
                        <span class="badge bg-info text-white mb-2">Tips Seleksi</span>
                        <h5 class="fw-bold text-white mb-1">Cek Email Berkala</h5>
                        <p class="small text-white-90 mb-0">Undangan interview sering masuk ke folder Spam. Pastikan Anda memeriksanya.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- 3. RIGHT COLUMN: ACTIONS & ACTIVITY --}}
    <div class="col-lg-7">
        
        {{-- Section Title --}}
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="fw-bold text-dark m-0">Quick Access</h5>
            <span class="badge bg-light text-secondary border">Menu Utama</span>
        </div>

        {{-- Grid Menu --}}
        <div class="row g-3 mb-4">
            
            {{-- Menu 1: Panduan --}}
            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="0">
                <a href="{{ route('dashboard.panduan') }}" class="text-decoration-none">
                    <div class="card-dashboard p-3 border-0 shadow-sm hover-card d-flex align-items-center gap-3" style="transition: transform 0.2s;">
                        <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" 
                             style="width: 50px; height: 50px; background-color: #e3f2fd; color: #0d6efd;">
                            <i class="bi bi-book-half fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Panduan</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.8rem;">Cara pengisian data</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Menu 2: Formulir --}}
            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('dashboard.formulir') }}" class="text-decoration-none">
                    <div class="card-dashboard p-3 border-0 shadow-sm hover-card d-flex align-items-center gap-3">
                        <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" 
                             style="width: 50px; height: 50px; background-color: #f3e5f5; color: #9c27b0;">
                            <i class="bi bi-ui-checks fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Formulir</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.8rem;">Lengkapi berkas</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Menu 3: Status --}}
            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('dashboard.status') }}" class="text-decoration-none">
                    <div class="card-dashboard p-3 border-0 shadow-sm hover-card d-flex align-items-center gap-3">
                        <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" 
                             style="width: 50px; height: 50px; background-color: #fff3e0; color: #f57c00;">
                            <i class="bi bi-hourglass-split fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Status</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.8rem;">Pantau seleksi</p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Menu 4: Info --}}
            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('dashboard.info') }}" class="text-decoration-none">
                    <div class="card-dashboard p-3 border-0 shadow-sm hover-card d-flex align-items-center gap-3">
                        <div class="rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" 
                             style="width: 50px; height: 50px; background-color: #e8f5e9; color: #198754;">
                            <i class="bi bi-megaphone-fill fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Info</h6>
                            <p class="small text-muted mb-0" style="font-size: 0.8rem;">Berita terbaru</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- Recent Activity (Mini Timeline Style) --}}
        <div class="card-dashboard border-0 shadow-sm p-4" data-aos="fade-up" data-aos-delay="400">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold text-dark m-0">Aktivitas Terkini</h5>
                <a href="#" class="small text-decoration-none text-imip fw-bold">Lihat Semua</a>
            </div>

            <div class="timeline-mini ps-2">
                
                {{-- Item 1 --}}
                <div class="d-flex gap-3 mb-4 position-relative">
                    {{-- Line Connector --}}
                    <div class="position-absolute" style="top: 10px; left: 6px; bottom: -20px; width: 2px; background-color: #e9ecef; z-index: 0;"></div>
                    
                    {{-- Dot --}}
                    <div class="rounded-circle bg-success flex-shrink-0 position-relative" style="width: 14px; height: 14px; z-index: 1; margin-top: 5px; border: 2px solid white; box-shadow: 0 0 0 2px #e8f5e9;"></div>
                    
                    <div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Formulir Registrasi Terkirim</h6>
                        <p class="text-muted small mb-0">Berkas administrasi Anda telah berhasil dikirim ke sistem.</p>
                        <span class="badge bg-light text-secondary border mt-2" style="font-weight: 500;">2 Jam yang lalu</span>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="d-flex gap-3 position-relative">
                    {{-- Dot --}}
                    <div class="rounded-circle bg-secondary flex-shrink-0 position-relative" style="width: 14px; height: 14px; z-index: 1; margin-top: 5px; border: 2px solid white; box-shadow: 0 0 0 2px #f0f0f0;"></div>
                    
                    <div>
                        <h6 class="fw-bold text-dark mb-1" style="font-size: 0.95rem;">Akun Diaktifkan</h6>
                        <p class="text-muted small mb-0">Anda berhasil melakukan verifikasi email dan login pertama kali.</p>
                        <span class="badge bg-light text-secondary border mt-2" style="font-weight: 500;">5 Jam yang lalu</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection