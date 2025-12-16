@extends('layouts.dashboard')

@section('content')

<style>
    /* --- HEADER --- */
    .page-header {
        background-color: white;
        border-radius: 16px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }

    .page-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 5px;
    }

    .page-subtitle {
        color: #666;
        font-size: 0.95rem;
        margin: 0;
    }

    /* --- CAROUSEL STYLES --- */
    .info-carousel-container {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 40px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        position: relative;
    }

    .carousel-item {
        height: 400px; /* Tinggi Carousel */
    }

    .carousel-item img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }


    .carousel-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60%;
        background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
        z-index: 1;
    }

    .carousel-caption {
        z-index: 2;
        text-align: left !important; /* Paksa rata kiri sesuai desain */
        bottom: 40px;
        left: 40px;
        right: 40px;
    }

    .carousel-caption h3 {
        font-weight: 700;
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .carousel-caption p {
        font-size: 1rem;
        opacity: 0.9;
    }

    /* --- NEWS CARD STYLES --- */
    .news-card {
        background-color: white;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 20px;
        display: flex;
        gap: 25px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .news-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        border-color: #198754;
    }

    .news-icon-box {
        width: 60px;
        height: 60px;
        background-color: #03624C; /* Warna Hijau Tua IMIP */
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .news-icon-box i {
        color: white;
        font-size: 1.8rem;
    }

    .news-content {
        flex-grow: 1;
    }

    .news-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: #000;
        margin-bottom: 8px;
    }

    .badge-container {
        display: flex;
        gap: 8px;
        margin-bottom: 12px;
    }

    .badge-custom {
        font-size: 0.75rem;
        padding: 4px 10px;
        border-radius: 4px;
        color: white;
        font-weight: 500;
    }

    .badge-publish { background-color: #03624C; } /* Hijau Tua */
    .badge-date { background-color: #fca503; } /* Kuning/Oranye */

    .news-desc {
        color: #555;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 10px;
    }

    .read-more {
        color: #198754;
        font-weight: 700;
        font-size: 0.85rem;
        text-decoration: none;
    }

    .read-more:hover {
        text-decoration: underline;
    }
</style>

<div class="page-header">
    <div>
        <h1 class="page-title">Info <span style="color: #03624C;">Rekrutmen</span></h1>
        <p class="page-subtitle">Informasi - informasi seputar proses rekrutmen</p>
    </div>
    <div style="background: #e8f5e9; width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
        <i class="bi bi-megaphone" style="font-size: 30px; color: #198754;"></i>
    </div>
</div>

<div class="info-carousel-container">
    <div id="infoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#infoCarousel" data-bs-slide-to="1"></button>
        </div>
        
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('image/carousel 1.png') }}" alt="Info 1">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <h3>Dokumen Wajib Yang Harus Dibawa</h3>
                    <p>Pastikan membawa dokumen asli: KTP, Ijazah terakhir, Transkrip nilai, Kartu Vaksin (minimal dosis 2), dan Surat Keterangan Sehat dari dokter.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('image/carousel 2.png') }}" alt="Info 2">
                <div class="carousel-overlay"></div>
                <div class="carousel-caption">
                    <h3>Protokol Kesehatan Ketat</h3>
                    <p>Seluruh peserta wajib menggunakan masker medis dan menjaga jarak selama proses seleksi berlangsung di area IMIP.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news-list">

    <div class="news-card">
        <div class="news-icon-box">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="news-content">
            <h5 class="news-title">Bersama Kita Raih Kesuksesan</h5>
            <div class="badge-container">
                <span class="badge-custom badge-publish">Publish</span>
                <span class="badge-custom badge-date">13 May 2022</span>
            </div>
            <p class="news-desc">
                Kabupaten Morowali memiliki potensi sumber daya nikel yang cukup besar sehingga punya prospek untuk mengembangkan industri berbasis nikel. Untuk menunjang pengolahan lebih lanjut...
            </p>
            <a href="#" class="read-more">Selengkapnya</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-icon-box">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="news-content">
            <h5 class="news-title">Sertifikat Vaksin Covid-19</h5>
            <div class="badge-container">
                <span class="badge-custom badge-publish">Publish</span>
                <span class="badge-custom badge-date">02 Dec 2021</span>
            </div>
            <p class="news-desc">
                Informasi Penting! Bagi pelamar yang akan diproses mulai tanggal 10 November 2021 diwajibkan telah melaksanakan vaksin Covid-19 dan dibuktikan dengan sertifikat vaksin...
            </p>
            
            {{-- Perubahan di sini: Menambahkan route('news.show') --}}
            <a href="{{ route('dashboard.news-show') }}" class="read-more">Selengkapnya</a>
        
        </div>
    </div>

    <div class="news-card">
        <div class="news-icon-box">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="news-content">
            <h5 class="news-title">Waspada Penipuan</h5>
            <div class="badge-container">
                <span class="badge-custom badge-publish">Publish</span>
                <span class="badge-custom badge-date">02 Dec 2021</span>
            </div>
            <p class="news-desc">
                Hati-hati penipuan rekrutmen. Penerimaan karyawan di kawasan PT. IMIP tidak dipungut biaya (gratis). Tidak dibenarkan melalui calo atau pihak lain sebagai perantara...
            </p>
            <a href="#" class="read-more">Selengkapnya</a>
        </div>
    </div>

    <div class="news-card">
        <div class="news-icon-box">
            <i class="bi bi-file-text"></i>
        </div>
        <div class="news-content">
            <h5 class="news-title">BPJS KESEHATAN</h5>
            <div class="badge-container">
                <span class="badge-custom badge-publish">Publish</span>
                <span class="badge-custom badge-date">01 Jan 2021</span>
            </div>
            <p class="news-desc">
                Mulai tanggal 01 Januari 2021, pelamar kerja wajib memiliki BPJS Kesehatan berstatus aktif. Bagi pelamar kerja yang telah melakukan registrasi berkas persyaratan...
            </p>
            <a href="#" class="read-more">Selengkapnya</a>
        </div>
    </div>

</div>

@endsection