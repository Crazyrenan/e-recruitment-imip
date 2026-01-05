@extends('layouts.dashboard')

@section('content')

{{-- 1. Header Title --}}
<div class="d-flex justify-content-between align-items-end mb-4">
    <div>
        <h1 class="page-title">Info <span class="text-imip">Rekrutmen</span></h1>
        <p class="page-subtitle mb-0">Pusat informasi terkini seputar rekrutmen PT IMIP</p>
    </div>
</div>

{{-- 2. Carousel (Tetap Sama) --}}
<div class="info-carousel-container mb-5">
    <div id="infoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel 1.png') }}" alt="Info 1">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption text-start">
                    <span class="badge bg-warning text-dark mb-2">Wajib Dibaca</span>
                    <h3 class="fw-bold">Dokumen Persyaratan</h3>
                    <p>Pastikan membawa dokumen asli: KTP, Ijazah, dan Transkrip saat verifikasi berkas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('image/carousel 2.png') }}" alt="Info 2">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption text-start">
                    <span class="badge bg-info text-white mb-2">Safety First</span>
                    <h3 class="fw-bold">Protokol Kesehatan</h3>
                    <p>Wajib menggunakan masker dan sepatu tertutup saat memasuki area seleksi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 3. SEARCH & FILTER SECTION (NEW & CRITICAL FOR UX) --}}
<div class="row g-3 align-items-center mb-4">
    <div class="col-md-7">
        {{-- Filter Pills (Kategori) --}}
        <div class="d-flex gap-2 overflow-auto pb-2" style="scrollbar-width: none;">
            <button class="btn btn-sm btn-dark rounded-pill px-3">Semua</button>
            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 bg-white">Pengumuman</button>
            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 bg-white">Jadwal</button>
            <button class="btn btn-sm btn-outline-secondary rounded-pill px-3 bg-white">Tips</button>
        </div>
    </div>
    <div class="col-md-5">
        {{-- Search Bar Modern --}}
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0 pe-0 rounded-start-pill ps-3">
                <i class="bi bi-search text-muted"></i>
            </span>
            <input type="text" class="form-control border-start-0 ps-2 rounded-end-pill" placeholder="Cari info (cth: Vaksin)...">
        </div>
    </div>
</div>

{{-- 4. News List --}}
<div class="news-list-wrapper">

    {{-- Item 1 --}}
    <div class="modern-news-card">
        <div class="modern-news-header">
            <h3 class="modern-news-title">Penting: Pembaruan Kebijakan K3</h3>
            <span class="status-pill">Publish</span>
        </div>
        <div class="modern-meta-group">
            <div class="meta-item"><i class="bi bi-calendar3"></i> 13 May 2022</div>
            <div class="meta-item"><i class="bi bi-tag"></i> Aturan</div>
        </div>
        <p class="modern-news-desc">
            Manajemen PT IMIP senantiasa berkomitmen untuk menjaga standar keselamatan kerja tertinggi. Berikut adalah pembaruan protokol...
        </p>
        <a href="{{ route('dashboard.news-show2') }}" class="modern-read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
    </div>

    {{-- Item 2 --}}
    <div class="modern-news-card">
        <div class="modern-news-header">
            <h3 class="modern-news-title">Sertifikat Vaksin Covid-19</h3>
            <span class="status-pill">Syarat</span>
        </div>
        <div class="modern-meta-group">
            <div class="meta-item"><i class="bi bi-calendar3"></i> 02 Dec 2021</div>
            <div class="meta-item"><i class="bi bi-tag"></i> Berkas</div>
        </div>
        <p class="modern-news-desc">
            Informasi Penting! Bagi pelamar yang akan diproses diwajibkan telah melaksanakan vaksin Covid-19...
        </p>
        <a href="{{ route('dashboard.news-show') }}" class="modern-read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
    </div>

    {{-- Item 3 --}}
    <div class="modern-news-card">
        <div class="modern-news-header">
            <h3 class="modern-news-title">Waspada Penipuan</h3>
            <span class="status-pill" style="background-color: #fff3cd; color: #856404;">Penting</span>
        </div>
        <div class="modern-meta-group">
            <div class="meta-item"><i class="bi bi-calendar3"></i> 02 Dec 2021</div>
            <div class="meta-item"><i class="bi bi-tag"></i> Warning</div>
        </div>
        <p class="modern-news-desc">
            Hati-hati penipuan rekrutmen. Penerimaan karyawan di kawasan PT. IMIP tidak dipungut biaya (gratis)...
        </p>
        <a href="#" class="modern-read-more">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
    </div>

</div>

{{-- 5. Pagination (Optional but recommended) --}}
<div class="d-flex justify-content-center mt-4 mb-5">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link rounded-pill me-1" href="#">Prev</a></li>
            <li class="page-item active"><a class="page-link rounded-pill me-1 bg-imip-dark border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link rounded-pill me-1 text-dark" href="#">2</a></li>
            <li class="page-item"><a class="page-link rounded-pill text-dark" href="#">Next</a></li>
        </ul>
    </nav>
</div>

@endsection