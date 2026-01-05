@extends('layouts.dashboard')

@section('content')

<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}" class="text-decoration-none text-muted">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard.info') }}" class="text-decoration-none text-muted">Berita</a>
        </li>
        <li class="breadcrumb-item active text-imip fw-bold" aria-current="page">Detail</li>
    </ol>
</nav>

<div class="row">
    
    {{-- === KOLOM KIRI: KONTEN UTAMA === --}}
    <div class="col-lg-8">
        
        {{-- Hero Image --}}
        <div class="news-hero-wrapper">
            <span class="category-badge">Publish</span>
            <img src="{{ asset('image/Image Cover.jpeg') }}" class="news-hero-img" alt="Hero Image">
        </div>

        {{-- Judul & Meta --}}
        <h1 class="news-heading-lg">Penting: Pembaruan Kebijakan K3 di Area Pabrik Morowali</h1>
        
        <div class="news-meta-modern">
            <div class="d-flex align-items-center gap-2">
                {{-- Placeholder Avatar --}}
                <img src="{{ asset('image/admin.jpg') }}" class="author-avatar" alt="Admin">
                <span class="fw-bold text-dark">Admin HRD</span>
            </div>
            <span><i class="bi bi-calendar"></i> 05 Des 2025</span>
            <span><i class="bi bi-eye"></i> 1,240 Views</span>
        </div>

        {{-- Isi Artikel --}}
        <div class="article-text">
            <p class="lead fw-bold text-secondary">
                Manajemen PT IMIP senantiasa berkomitmen untuk menjaga standar keselamatan kerja tertinggi. Berikut adalah pembaruan protokol yang wajib dipatuhi mulai bulan depan.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus. Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi.
            </p>
            <p>
                Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend.
            </p>
            
            <h4 class="fw-bold mt-4 mb-3">Prosedur Baru Penggunaan APD</h4>
            <p>
                Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
            </p>
            <ul>
                <li>Wajib menggunakan helm safety standar ISO terbaru.</li>
                <li>Sepatu safety harus diperiksa kelayakannya setiap bulan.</li>
                <li>Rompi reflektor wajib digunakan di area logistik.</li>
            </ul>
        </div>

        {{-- Tags Section --}}
        <div class="mt-5 pt-3 border-top">
            <span class="fw-bold me-2">Tags:</span>
            <a href="#" class="btn btn-sm btn-light border me-1">#SafetyFirst</a>
            <a href="#" class="btn btn-sm btn-light border me-1">#K3</a>
            <a href="#" class="btn btn-sm btn-light border">#IMIPUpdate</a>
        </div>
    </div>

    {{-- === KOLOM KANAN: SIDEBAR === --}}
    <div class="col-lg-4 ps-lg-5 mt-5 mt-lg-0">
        
        {{-- Widget 1: Berita Terbaru --}}
        <div class="sidebar-widget">
            <h5 class="widget-title">Berita Terbaru</h5>
            
            <a href="#" class="recent-post-item">
                <img src="{{ asset('image/direksi.jpg') }}" class="recent-post-thumb" alt="Thumb">
                <div class="recent-post-info">
                    <h6>Jadwal MCU Batch 5 Telah Keluar</h6>
                    <span class="recent-post-date">2 Jam yang lalu</span>
                </div>
            </a>

            <a href="#" class="recent-post-item">
                <img src="{{ asset('image/it-support.png') }}" class="recent-post-thumb" alt="Thumb">
                <div class="recent-post-info">
                    <h6>Lowongan IT Support Dibuka Kembali</h6>
                    <span class="recent-post-date">1 Hari yang lalu</span>
                </div>
            </a>

            <a href="#" class="recent-post-item">
                <img src="{{ asset('image/thumb1.jpg') }}" class="recent-post-thumb" alt="Thumb">
                <div class="recent-post-info">
                    <h6>Kunjungan Direksi ke Site Morowali</h6>
                    <span class="recent-post-date">3 Hari yang lalu</span>
                </div>
            </a>
        </div>

        {{-- Widget 2: Kategori (Optional) --}}
        <div class="sidebar-widget">
            <h5 class="widget-title">Kategori</h5>
            <div class="d-flex flex-column gap-2">
                <a href="#" class="text-decoration-none text-secondary py-1 border-bottom d-flex justify-content-between">
                    Pengumuman <span class="badge bg-secondary rounded-pill">12</span>
                </a>
                <a href="#" class="text-decoration-none text-secondary py-1 border-bottom d-flex justify-content-between">
                    Tips Karir <span class="badge bg-secondary rounded-pill">5</span>
                </a>
                <a href="#" class="text-decoration-none text-secondary py-1 d-flex justify-content-between">
                    Berita Perusahaan <span class="badge bg-secondary rounded-pill">8</span>
                </a>
            </div>
        </div>

    </div>
</div>

@endsection