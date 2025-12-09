@extends('layouts.dashboard')

@section('content')

<style>
    /* Reuse Header & General Styles */
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
    
    .form-title { font-size: 1.8rem; font-weight: 700; color: #000; margin-bottom: 5px; }
    .form-subtitle { color: #666; font-size: 0.95rem; margin: 0; }
    
    .header-illustration {
        background-color: #e8f5e9;
        width: 80px; height: 80px; border-radius: 50%;
        display: flex; align-items: center; justify-content: center;
    }

    .form-label { font-weight: 500; color: #333; margin-bottom: 8px; }
    
    .form-control {
        padding: 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background-color: white;
        margin-bottom: 5px; /* Margin bottom small for caption space */
    }

    /* Khusus Input Hijau Gelap (Readonly/Primary) */
    .form-control-dark {
        background-color: #03624C;
        color: white;
        border: 1px solid #03624C;
    }
    .form-control-dark:focus {
        background-color: #03624C;
        color: white;
        box-shadow: none;
    }

    .form-caption {
        font-size: 0.75rem;
        color: #666;
        margin-bottom: 20px;
        display: block;
    }

    /* Social Media Section Title */
    .section-divider {
        text-align: center;
        margin: 40px 0 30px 0;
    }
    .section-divider h3 {
        font-weight: 700;
        text-transform: uppercase;
        color: #000;
        font-size: 1.5rem;
    }

    /* Warning & Buttons (Same as Permintaan) */
    .warning-box {
        background-color: white;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        margin-top: 40px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }
    .warning-title { color: #d32f2f; font-weight: 700; margin-bottom: 10px; }
    .warning-text { font-size: 0.85rem; color: #333; line-height: 1.5; }

    .action-buttons { display: flex; justify-content: flex-end; gap: 15px; margin-top: 20px; }
    .btn-selesai { background-color: #03624C; color: white; padding: 12px 40px; border-radius: 8px; font-weight: 600; border: none; display: flex; align-items: center; gap: 8px; }
    .btn-batal { background-color: #d32f2f; color: white; padding: 12px 40px; border-radius: 8px; font-weight: 600; border: none; display: flex; align-items: center; gap: 8px; }
</style>

<div class="form-header">
    <div>
        <h1 class="form-title">Formulir Registrasi / <span style="color: #03624C;">Data Kontak</span></h1>
        <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
    </div>
    <div class="header-illustration">
        <i class="bi bi-person-lines-fill" style="font-size: 30px; color: #198754;"></i>
    </div>
</div>

<form action="#" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Email*</label>
            <input type="email" class="form-control form-control-dark" value="jonathan.axlw@gmail.com" readonly>
            <span class="form-caption">Sesuai data registrasi akun</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Nomor Ponsel*</label>
            <input type="text" class="form-control form-control-dark" value="08113214155" readonly>
            <span class="form-caption">Cth : 08123456789</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Nomor Telepon Rumah</label>
            <input type="text" class="form-control">
            <span class="form-caption">Cth : 0213892731</span>
        </div>
    </div>

    <div class="section-divider">
        <h3>MEDIA SOSIAL</h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Nomor WhatsApp</label>
            <input type="text" class="form-control">
            <span class="form-caption">Jika ingin terima notifikasi via Whatsapp wajib di isi</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Facebook</label>
            <input type="text" class="form-control">
            <span class="form-caption">Cth : facebook.com/pelamar_pt_imip</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Instagram</label>
            <input type="text" class="form-control">
            <span class="form-caption">Cth : pelamar_pt_imip</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Twitter</label>
            <input type="text" class="form-control">
            <span class="form-caption">Cth : @pelamar_pt_imip</span>
        </div>

        <div class="col-md-6">
            <label class="form-label">Linkedin</label>
            <input type="text" class="form-control">
            <span class="form-caption">Cth : Pelamar PT IMIP</span>
        </div>
    </div>

    <div class="warning-box">
        <h5 class="warning-title">Mohon diperhatikan sebelum mengisi formulir !</h5>
        <p class="warning-text">
            Pastikan data yang di input sudah sesuai dan bisa di pertanggung jawabkan ke aslian data nya, ketika anda menekan tombol SELESAI, maka data akan langsung di kirim ke database kami dan tidak dapat di ubah kembali. Jika data atau dokumen pendukung untuk mengisi formulir belum disiapkan, silahkan isi di lain waktu atau tekan tombol BATAL !
        </p>
    </div>

    <div class="action-buttons">
        <button type="button" class="btn-selesai"><i class="bi bi-save"></i> Selesai</button>
        <a href="{{ route('dashboard.formulir') }}" class="btn-batal"><i class="bi bi-x-circle"></i> Batal</a>
    </div>
</form>

@endsection