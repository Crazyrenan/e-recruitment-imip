@extends('layouts.dashboard')

@section('content')

<style>
    .welcome-card {
        background-color: white;
        border-radius: 16px;
        padding: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }
    
    /* Quick Access Cards */
    .quick-access-card {
        background-color: white;
        border-radius: 12px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
        border: 1px solid #eee;
        transition: transform 0.2s, box-shadow 0.2s;
        height: 100%;
    }

    .quick-access-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .qa-icon {
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        color: white;
        flex-shrink: 0; 
    }

    /* Icon Background Colors */
    .bg-blue { background-color: #0d6efd; }
    .bg-orange { background-color: #fd7e14; }
    .bg-purple { background-color: #6f42c1; }
    .bg-green { background-color: #198754; }

    .qa-title { font-weight: 700; font-size: 1rem; margin: 0; color: #333; }
    .qa-desc { font-size: 0.75rem; color: #888; margin: 0; line-height: 1.4; }

    /* Recent Activity Widget */
    .activity-card {
        background-color: white;
        border-radius: 12px;
        padding: 20px;
        margin-top: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }
    
    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid #f0f0f0;
    }
    
    /* Removes border from the last item */
    .activity-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }
    
    .activity-dot {
        width: 10px;
        height: 10px;
        background-color: #03624C; /* IMIP Green */
        border-radius: 50%;
        margin-top: 6px;
        flex-shrink: 0;
    }
</style>

<div class="welcome-card">
    <div>
        <h2 class="fw-bold mb-1">Welcome back <span style="color: #03624C;">Jonathan!</span></h2>
        <p class="text-muted mb-0">Kelola proses rekrutmen Anda dengan mudah</p>
    </div>
    
    <div>
        <img src="{{ asset('image/dashboard icon.png') }}" 
             style="width: 150px; height: auto; object-fit: contain;" 
             alt="Welcome Illustration">
    </div>
</div>

<div class="row g-4">
    
    <div class="col-lg-4">
        <div style="position: relative; height: 100%; min-height: 500px;">

            <div id="dashboardHeroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                 style="height: 100%; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">

                <div class="carousel-inner" style="height: 100%;">

                    <div class="carousel-item active" style="height: 100%;" data-bs-interval="3000">
                        <img src="{{ asset('image/dashboard.jpg') }}"
                             class="d-block w-100"
                             style="height: 100%; object-fit: cover;"
                             alt="Worker Plant">
                    </div>

                    <div class="carousel-item" style="height: 100%;" data-bs-interval="3000">
                        <img src="{{ asset('image/smelter.jpg') }}"
                             class="d-block w-100"
                             style="height: 100%; object-fit: cover;"
                             alt="Smelter">
                    </div>

                    <div class="carousel-item" style="height: 100%;" data-bs-interval="3000">
                        <img src="{{ asset('image/warehouse.jpg') }}"
                             class="d-block w-100"
                             style="height: 100%; object-fit: cover;"
                             alt="Port Logistics">
                    </div>

                </div>
            </div>

            <div style="position: absolute; bottom: 20px; right: 20px; background: white; padding: 10px; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; z-index: 10; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                 <img src="{{ asset('image/logoimip.png') }}" style="width: 40px;" alt="Logo">
            </div>
        </div>
    </div>

   <div class="col-lg-8">
        <h5 class="mb-3 fw-bold text-secondary" style="font-size: 0.9rem;">Quick Access</h5>
        
        <div class="row g-3">
            
            <div class="col-md-6">
                <a href="{{ route('dashboard.panduan') }}" class="text-decoration-none">
                    <div class="quick-access-card">
                        <div class="qa-icon bg-blue"><i class="bi bi-file-text"></i></div>
                        <div>
                            <h6 class="qa-title">Panduan Registrasi</h6>
                            <p class="qa-desc">Lihat Panduan lengkap untuk proses registrasi</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.status') }}" class="text-decoration-none">
                    <div class="quick-access-card">
                        <div class="qa-icon bg-orange"><i class="bi bi-clock-history"></i></div>
                        <div>
                            <h6 class="qa-title">Status Proses</h6>
                            <p class="qa-desc">Cek status proses registrasi Anda</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.formulir') }}" class="text-decoration-none">
                    <div class="quick-access-card">
                        <div class="qa-icon bg-purple"><i class="bi bi-list-check"></i></div>
                        <div>
                            <h6 class="qa-title">Formulir Registrasi</h6>
                            <p class="qa-desc">Isi formulir registrasi karyawan baru</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.info') }}" class="text-decoration-none">
                    <div class="quick-access-card">
                        <div class="qa-icon bg-green"><i class="bi bi-people"></i></div>
                        <div>
                            <h6 class="qa-title">Info Rekrutmen</h6>
                            <p class="qa-desc">Informasi lowongan dan rekrutmen terbaru</p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>

        <div class="activity-card">
            <h5 class="mb-3 fw-bold text-secondary" style="font-size: 0.9rem;">Recent Activity</h5>
            
            <div class="activity-item">
                <div class="activity-dot"></div>
                <div>
                    <h6 class="mb-1 fw-bold" style="font-size: 0.95rem;">Formulir registrasi Terkirim</h6>
                    <small class="text-muted">2 Jam yang lalu</small>
                </div>
            </div>

            <div class="activity-item">
                <div class="activity-dot"></div>
                <div>
                    <h6 class="mb-1 fw-bold" style="font-size: 0.95rem;">Akun sudah terdaftar</h6>
                    <small class="text-muted">5 Jam yang lalu</small>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection