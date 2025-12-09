@extends('layouts.dashboard')

@section('content')

<style>
    /* Reuse Header Styles */
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

    /* Form Card Styles */
    .form-card {
        background-color: #f8f9fa; /* Light background as per design */
        padding: 10px 0;
    }

    .form-label {
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }

    .form-control, .form-select {
        padding: 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background-color: white;
        margin-bottom: 20px;
    }

    /* Footer Warning */
    .warning-box {
        background-color: white;
        border-radius: 12px;
        padding: 30px;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .warning-title {
        color: #d32f2f; /* Red */
        font-weight: 700;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .warning-text {
        font-size: 0.85rem;
        color: #333;
        line-height: 1.5;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 15px;
        margin-top: 20px;
    }

    .btn-selesai {
        background-color: #03624C;
        color: white;
        padding: 12px 40px;
        border-radius: 8px;
        font-weight: 600;
        border: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-batal {
        background-color: #d32f2f;
        color: white;
        padding: 12px 40px;
        border-radius: 8px;
        font-weight: 600;
        border: none;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .input-group-text {
        background-color: #03624C;
        color: white;
        border: 1px solid #03624C;
    }
</style>

<div class="form-header">
    <div>
        <h1 class="form-title">Formulir Registrasi / <span style="color: #03624C;">Data Permintaan</span></h1>
        <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
    </div>
    <div class="header-illustration">
        <i class="bi bi-person-workspace" style="font-size: 30px; color: #198754;"></i>
    </div>
</div>

<form action="#" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Kategori Lamaran</label>
            <select class="form-select">
                <option selected>--PILIH--</option>
                <option value="1">Staff</option>
                <option value="2">Lapangan</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Gaji Yang Diharapkan</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp.</span>
                <input type="number" class="form-control mb-0" placeholder="">
            </div>
        </div>

        <div class="col-12">
            <label class="form-label">Alasan / tujuan saudara bekerja di perusahaan ini</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Tunjangan lain yang saudara harapkan</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-12">
            <label class="form-label">Fasilitas lain yang saudara harapkan</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
            <label class="form-label">Saya bersedia bertugas di luar kota? *</label>
            <select class="form-select">
                <option selected>--PILIH--</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Saya bersedia ditempatkan di luar kota? *</label>
            <select class="form-select">
                <option selected>--PILIH--</option>
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
        </div>

        <div class="col-12">
            <label class="form-label">Sebutkan tujuan karir saudara !</label>
            <input type="text" class="form-control">
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