@extends('layouts.dashboard')

@section('content')

<style>
    /* Styling khusus untuk header panduan agar mirip desain */
    .guide-header {
        background-color: white;
        border-radius: 16px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }

    .guide-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 5px;
    }

    .guide-subtitle {
        color: #666;
        font-size: 0.95rem;
        margin: 0;
    }

    /* Styling untuk ilustrasi kanan atas */
    .guide-illustration {
        background-color: #e8f5e9; /* Background hijau muda */
        width: 80px;
        height: 80px;
        border-radius: 50%; /* Lingkaran */
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    
    /* Dekorasi lingkaran kecil oranye di ilustrasi (sesuai gambar) */
    .guide-illustration::after {
        content: '';
        position: absolute;
        bottom: 5px;
        right: -5px;
        width: 25px;
        height: 25px;
        background-color: #fd7e14; /* Oranye */
        border-radius: 50%;
        z-index: 0;
    }

    .guide-illustration img {
        width: 40px;
        position: relative;
        z-index: 1;
    }

    /* Container untuk PDF */
    .pdf-container {
        background-color: white;
        border-radius: 16px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
        height: 800px; /* Tinggi viewer PDF */
    }

    .pdf-frame {
        width: 100%;
        height: 100%;
        border-radius: 8px;
        border: 1px solid #eee;
    }
</style>

<div class="guide-header">
    <div>
        <h1 class="guide-title">Panduan <span style="color: #03624C;">Registrasi</span></h1>
        <p class="guide-subtitle">Langkah-Langkah Registrasi untuk Pelamar Baru</p>
    </div>
    
    <div class="guide-illustration">
        <i class="bi bi-book" style="font-size: 30px; color: #198754; position: relative; z-index: 2;"></i>
    </div>
</div>

<div class="pdf-container">
    <iframe src="{{ asset('panduan.pdf') }}" class="pdf-frame" type="application/pdf">
        <p>Browser Anda tidak mendukung PDF Viewer. 
           <a href="{{ asset('panduan.pdf') }}">Klik disini untuk download panduan.</a>
        </p>
    </iframe>
</div>

@endsection