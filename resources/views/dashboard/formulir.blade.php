@extends('layouts.dashboard')

@section('content')

<style>
    /* --- HEADER STYLES --- */
    .form-header {
        background-color: white;
        border-radius: 16px;
        padding: 30px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.02);
    }

    .form-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 5px;
    }

    .form-subtitle {
        color: #666;
        font-size: 0.95rem;
        margin: 0;
    }

    .header-illustration {
        background-color: #e8f5e9;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    /* --- LEGEND & CONTENT STYLES --- */
    .info-box {
        background-color: #f8f9fa;
        border-left: 4px solid #666;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 30px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 8px;
        font-size: 0.9rem;
        color: #555;
    }

    /* --- FORM ITEM CARD STYLES --- */
    .form-list-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
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

    .item-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .status-dot {
        width: 14px;
        height: 14px;
        border-radius: 50%;
        display: inline-block;
    }

    .item-title {
        font-weight: 600;
        font-size: 1rem;
        color: #333;
    }

    .status-icon {
        font-size: 1.5rem;
    }

    /* --- STATE: INCOMPLETE (RED) --- */
    .form-item.incomplete {
        border-left: 5px solid #dc3545; /* Red Border */
    }
    .form-item.incomplete .status-dot {
        background-color: #dc3545;
        box-shadow: 0 0 0 4px rgba(220, 53, 69, 0.1);
    }
    .form-item.incomplete .status-icon {
        color: #dc3545;
    }
    .form-item.incomplete:hover {
        background-color: #fff5f5;
    }

    /* --- STATE: COMPLETE (GREEN) --- */
    .form-item.complete {
        border-left: 5px solid #198754; /* Green Border */
    }
    .form-item.complete .status-dot {
        background-color: #198754;
        box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
    }
    .form-item.complete .status-icon {
        color: #198754;
    }
    .form-item.complete:hover {
        background-color: #f0fff4;
    }

    /* --- SIMULATION BUTTON --- */
    .sim-btn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        font-size: 0.85rem;
        z-index: 9999;
        cursor: pointer;
    }
    .sim-btn:hover { background-color: #0b5ed7; }
</style>

<div class="form-header">
    <div>
        <h1 class="form-title">Formulir <span style="color: #03624C;">Registrasi</span></h1>
        <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
    </div>
    <div class="header-illustration">
        <i class="bi bi-pencil-square" style="font-size: 30px; color: #198754;"></i>
    </div>
</div>

<div class="info-box">
    <p class="mb-3 fw-bold">Silahkan isi formulir registrasi di bawah ini sampai list warna <span class="text-danger">Merah</span> menjadi Warna <span class="text-success">Hijau</span></p>
    
    <div class="legend-item">
        <i class="bi bi-x-square-fill text-danger fs-5"></i>
        <span>Formulir <strong>BELUM</strong> terisi secara lengkap!</span>
    </div>
    <div class="legend-item">
        <i class="bi bi-check-square-fill text-success fs-5"></i>
        <span>Formulir <strong>SUDAH</strong> terisi secara lengkap!</span>
    </div>
</div>

<div class="form-list-container" id="formList">

   <a href="{{ route('formulir.personal') }}" style="text-decoration: none; color: inherit;">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Personal</span>
            </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    <a href="{{ route('formulir.permintaan') }}" style="text-decoration: none; color: inherit;">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Permintaan</span> </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pendidikan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Alamat</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pekerjaan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    <a href="{{ route('formulir.kontak') }}" style="text-decoration: none; color: inherit;">
        <div class="form-item incomplete">
            <div class="item-left">
                <span class="status-dot"></span>
                <span class="item-title">Formulir Data Kontak</span>
            </div>
            <i class="bi bi-file-earmark-x status-icon"></i>
        </div>
    </a>

    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kontak Darurat</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

    <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Ahli Waris</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>
    
     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Keluarga</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kursus</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Pendukung</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Kegiatan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data SIM</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Lampiran</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>
    
     <div class="form-item incomplete">
        <div class="item-left">
            <span class="status-dot"></span>
            <span class="item-title">Formulir Data Persetujuan</span>
        </div>
        <i class="bi bi-file-earmark-x status-icon"></i>
    </div>

</div>

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
                // Change to Green/Complete
                item.classList.remove('incomplete');
                item.classList.add('complete');
                
                // Change Icon
                icon.classList.remove('bi-file-earmark-x');
                icon.classList.add('bi-file-earmark-check');
            } else {
                // Change back to Red/Incomplete
                item.classList.remove('complete');
                item.classList.add('incomplete');
                
                // Change Icon
                icon.classList.remove('bi-file-earmark-check');
                icon.classList.add('bi-file-earmark-x');
            }
        });
    }
</script>

@endsection