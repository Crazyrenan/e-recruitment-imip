@extends('layouts.dashboard')

@section('content')

<div class="card-dashboard d-flex justify-content-between align-items-center">
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

            <div id="dashboardHeroCarousel" class="carousel slide carousel-fade h-100 rounded-4 overflow-hidden shadow-sm" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <div class="carousel-item active h-100" data-bs-interval="3000">
                        <img src="{{ asset('image/dashboard.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Worker Plant">
                    </div>
                    <div class="carousel-item h-100" data-bs-interval="3000">
                        <img src="{{ asset('image/smelter.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Smelter">
                    </div>
                    <div class="carousel-item h-100" data-bs-interval="3000">
                        <img src="{{ asset('image/warehouse.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Port Logistics">
                    </div>
                </div>
            </div>

            <div class="position-absolute bottom-0 end-0 m-4 bg-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                 style="width: 60px; height: 60px; z-index: 10;">
                 <img src="{{ asset('image/logoimip.png') }}" style="width: 40px;" alt="Logo">
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <h5 class="mb-3 fw-bold text-secondary small">Quick Access</h5>
        
        <div class="row g-3">
            
            <div class="col-md-6">
                <a href="{{ route('dashboard.panduan') }}" class="text-decoration-none text-dark">
                    <div class="hover-card p-3 d-flex align-items-center gap-3">
                        <div class="icon-box bg-primary text-white rounded-3" style="width: 50px; height: 50px;">
                            <i class="bi bi-file-text fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold m-0">Panduan Registrasi</h6>
                            <p class="small text-muted m-0">Lihat Panduan lengkap</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.status') }}" class="text-decoration-none text-dark">
                    <div class="hover-card p-3 d-flex align-items-center gap-3">
                        <div class="icon-box bg-warning text-white rounded-3" style="width: 50px; height: 50px;">
                            <i class="bi bi-clock-history fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold m-0">Status Proses</h6>
                            <p class="small text-muted m-0">Cek status registrasi</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.formulir') }}" class="text-decoration-none text-dark">
                    <div class="hover-card p-3 d-flex align-items-center gap-3">
                        <div class="icon-box bg-purple text-white rounded-3" style="width: 50px; height: 50px; background-color: #6f42c1;">
                            <i class="bi bi-list-check fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold m-0">Formulir Registrasi</h6>
                            <p class="small text-muted m-0">Isi formulir karyawan</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('dashboard.info') }}" class="text-decoration-none text-dark">
                    <div class="hover-card p-3 d-flex align-items-center gap-3">
                        <div class="icon-box bg-success text-white rounded-3" style="width: 50px; height: 50px;">
                            <i class="bi bi-people fs-4"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold m-0">Info Rekrutmen</h6>
                            <p class="small text-muted m-0">Info lowongan terbaru</p>
                        </div>
                    </div>
                </a>
            </div>
            
        </div>

        <div class="card-dashboard mt-4 p-4">
            <h5 class="mb-3 fw-bold text-secondary small">Recent Activity</h5>
            
            <div class="activity-list">
                <div class="d-flex align-items-start gap-3 mb-3 border-bottom pb-3">
                    <div class="rounded-circle mt-1" style="width: 10px; height: 10px; background-color: #03624C;"></div>
                    <div>
                        <h6 class="mb-1 fw-bold small">Formulir registrasi Terkirim</h6>
                        <small class="text-muted">2 Jam yang lalu</small>
                    </div>
                </div>

                <div class="d-flex align-items-start gap-3">
                    <div class="rounded-circle mt-1" style="width: 10px; height: 10px; background-color: #03624C;"></div>
                    <div>
                        <h6 class="mb-1 fw-bold small">Akun sudah terdaftar</h6>
                        <small class="text-muted">5 Jam yang lalu</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection