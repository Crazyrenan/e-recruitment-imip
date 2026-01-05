@extends('layouts.dashboard')

@section('content')

{{-- 1. STYLING KHUSUS HALAMAN INI --}}
<style>
    /* --- HEADER STYLES --- */
    .form-header-modern {
        background: linear-gradient(135deg, #ffffff 0%, #f8fcfb 100%);
        border-radius: 16px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        border: 1px solid rgba(0,0,0,0.03);
        position: relative;
        overflow: hidden;
        height: 100%; /* Agar tinggi sama dengan card sebelah */
    }
    
    .form-header-modern::before {
        content: ''; position: absolute; top: 0; left: 0; bottom: 0; width: 6px; background-color: #03624C;
    }

    .form-title { font-size: 1.8rem; font-weight: 700; color: #000; margin-bottom: 5px; }
    .form-subtitle { color: #666; font-size: 0.95rem; margin: 0; }

    /* --- SHORTCUT GUIDE CARD --- */
    .guide-shortcut-card {
        background-color: #e8f5e9; /* Hijau Muda */
        border: 1px solid #c8e6c9;
        border-radius: 16px; /* Samakan radius */
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
        transition: all 0.2s ease;
        text-decoration: none;
        height: 100%; /* Agar tinggi fill */
    }

    .guide-shortcut-card:hover {
        background-color: #dcedc8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    }

    .guide-icon-box {
        width: 50px; height: 50px;
        background-color: #198754;
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        color: white; font-size: 1.5rem; flex-shrink: 0;
    }

    .guide-text h6 { color: #198754; font-weight: 700; margin: 0; font-size: 1rem; }
    .guide-text p { color: #555; font-size: 0.85rem; margin: 0; line-height: 1.2; }
    .guide-arrow { color: #198754; font-size: 1.2rem; margin-left: auto; }

    /* --- LEGEND STYLES --- */
    .info-box {
        background-color: #fff;
        border: 1px solid #eee;
        border-left: 4px solid #666;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    /* --- FORM ITEM CARD STYLES --- */
    .form-list-container {
        display: flex; flex-direction: column; gap: 15px;
    }

    .form-item {
        background-color: white;
        padding: 20px 25px;
        border-radius: 12px;
        border: 1px solid #eee;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .form-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }

    .item-left { display: flex; align-items: center; gap: 15px; }
    .status-dot { width: 14px; height: 14px; border-radius: 50%; display: inline-block; }
    .item-title { font-weight: 600; font-size: 1rem; color: #333; }
    .status-icon { font-size: 1.5rem; }

    /* States */
    .form-item.incomplete { border-left: 5px solid #dc3545; }
    .form-item.incomplete .status-dot { background-color: #dc3545; box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.1); }
    .form-item.incomplete .status-icon { color: #dc3545; }
    
    .form-item.complete { border-left: 5px solid #198754; }
    .form-item.complete .status-dot { background-color: #198754; box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1); }
    .form-item.complete .status-icon { color: #198754; }

    /* Sim Button */
    .sim-btn {
        position: fixed; bottom: 30px; right: 30px; background-color: #0d6efd; color: white;
        border: none; padding: 10px 20px; border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2); font-size: 0.85rem; z-index: 9999; cursor: pointer;
    }
    .sim-btn:hover { background-color: #0b5ed7; }
</style>

{{-- 2. HEADER BARU (LAYOUT 2 KOLOM) --}}
<div class="row g-4 align-items-stretch mb-4">
    {{-- Kolom Kiri: Judul --}}
    <div class="col-lg-8">
        <div class="form-header-modern h-100">
            <div>
                <h1 class="form-title">Formulir <span style="color: #03624C;">Registrasi</span></h1>
                <p class="form-subtitle">Lengkapi 15 data di bawah ini untuk melanjutkan proses seleksi.</p>
            </div>
        </div>
    </div>

    {{-- Kolom Kanan: Shortcut Panduan --}}
    <div class="col-lg-4">
        <a href="{{ route('dashboard.panduan') }}" class="guide-shortcut-card h-100 text-decoration-none">
            <div class="guide-icon-box">
                <i class="bi bi-book-half"></i>
            </div>
            <div class="guide-text">
                <h6>Bingung mengisi?</h6>
                <p>Baca Panduan Registrasi di sini</p>
            </div>
            <i class="bi bi-arrow-right-circle guide-arrow"></i>
        </a>
    </div>
</div>

{{-- 3. LEGEND / INFO --}}
<div class="info-box shadow-sm border-0">
    <div class="d-flex align-items-start gap-3">
        <i class="bi bi-info-circle-fill fs-4 text-secondary mt-1"></i>
        <div>
            <p class="mb-2 fw-bold text-dark">Instruksi Pengisian:</p>
            <p class="mb-3 text-muted small">Pastikan semua formulir berubah status menjadi <span class="text-success fw-bold">HIJAU (Lengkap)</span> sebelum menunggu proses verifikasi.</p>
            
            <div class="d-flex gap-4 flex-wrap">
                <div class="d-flex align-items-center gap-2 small">
                    <i class="bi bi-x-square-fill text-danger"></i>
                    <span>Belum Lengkap</span>
                </div>
                <div class="d-flex align-items-center gap-2 small">
                    <i class="bi bi-check-square-fill text-success"></i>
                    <span>Sudah Lengkap</span>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 4. DAFTAR FORMULIR (15 ITEM) --}}
<div class="form-list-container" id="formList">

    {{-- 1. Personal --}}
    <a href="{{ route('formulir.personal') }}" class="text-decoration-none text-dark">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Personal</span>
            </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    {{-- 2. Permintaan --}}
    <a href="{{ route('formulir.permintaan') }}" class="text-decoration-none text-dark">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Permintaan</span> 
            </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    {{-- 3. Pendidikan --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pendidikan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 4. Alamat --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Alamat</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 5. Pekerjaan --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pekerjaan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 6. Kontak --}}
    <a href="{{ route('formulir.kontak') }}" class="text-decoration-none text-dark">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Kontak</span>
            </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    {{-- 7. Kontak Darurat --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kontak Darurat</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 8. Ahli Waris --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Ahli Waris</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>
    
    {{-- 9. Keluarga --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Keluarga</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 10. Kursus --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kursus</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 11. Pendukung --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pendukung</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 12. Kegiatan --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kegiatan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 13. SIM --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data SIM</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    {{-- 14. Lampiran --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Lampiran</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>
    
    {{-- 15. Persetujuan --}}
    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Persetujuan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

</div>

{{-- SIMULATION BUTTON --}}
<button class="sim-btn" onclick="toggleStatus()">
    <i class="bi bi-magic"></i> Switch Status Demo
</button>

<script>
    let isComplete = false;

    function toggleStatus() {
        const items = document.querySelectorAll('.form-item');
        isComplete = !isComplete; // Toggle state

        items.forEach(item => {
            const icon = item.querySelector('.status-icon');
            
            if (isComplete) {
            
                item.classList.remove('incomplete');
                item.classList.add('complete');
                
         
                icon.classList.remove('bi-file-earmark-x');
                icon.classList.add('bi-file-earmark-check');
            } else {
                item.classList.remove('complete');
                item.classList.add('incomplete');
            
                icon.classList.remove('bi-file-earmark-check');
                icon.classList.add('bi-file-earmark-x');
            }
        });
    }
</script>

@endsection