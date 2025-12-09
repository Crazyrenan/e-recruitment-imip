@extends('layouts.dashboard')

@section('content')

<style>
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
    
    .form-control, .form-select {
        padding: 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        background-color: white;
        margin-bottom: 20px;
    }

    .form-control-highlight {
        background-color: #03624C;
        color: white;
        border: 1px solid #03624C;
    }
    .form-control-highlight:focus {
        background-color: #03624C;
        color: white;
        box-shadow: none;
    }

    .input-caption {
        font-size: 0.75rem;
        color: #666;
        margin-top: -15px;
        margin-bottom: 20px;
        display: block;
    }

    .input-group-text {
        background-color: #03624C;
        color: white;
        border: 1px solid #03624C;
    }

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
        <h1 class="form-title">Formulir Registrasi / <span style="color: #03624C;">Data Personal</span></h1>
        <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
    </div>
    <div class="header-illustration">
        <i class="bi bi-person-badge" style="font-size: 30px; color: #198754;"></i>
    </div>
</div>

<form action="#" method="POST">
    <div class="row">
        
        <div class="col-md-6">
            <label class="form-label">Nomor KTP *</label>
            <input type="text" class="form-control form-control-highlight" value="7777777777777777" readonly>
            <span class="input-caption">Sesuai data registrasi akun</span>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" placeholder="Jenis Kelamin">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Nama Panggilan</label>
                    <input type="text" class="form-control" placeholder="Nama Panggilan">
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control form-control-highlight" value="Jonathan Axl W" readonly>
            <span class="input-caption">Sesuai data registrasi akun</span>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Agama</label>
                    <select class="form-select">
                        <option selected>Agama</option>
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label class="form-label">Tanggal Lahir *</label>
            <input type="text" class="form-control form-control-highlight" value="1999-01-01" readonly> </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label">Status Pernikahan</label>
                    <input type="text" class="form-control" placeholder="Status Pernikahan">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Suku</label>
                    <input type="text" class="form-control" placeholder="Suku">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <label class="form-label">Tinggi Badan</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control mb-0" placeholder="Tinggi Badan (CM)">
                <span class="input-group-text">cm</span>
            </div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Berat Badan</label>
            <div class="input-group mb-3">
                <input type="number" class="form-control mb-0" placeholder="Berat Badan">
                <span class="input-group-text">kg</span>
            </div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Golongan Darah</label>
            <select class="form-select">
                <option selected>Golongan Darah</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>

        <div class="col-md-4">
            <label class="form-label">No BPJS Kesehatan</label>
            <input type="text" class="form-control" placeholder="Status Pernikahan"> <span class="input-caption">Wajib sudah memiliki BPJS Kesehatan</span>
        </div>
        <div class="col-md-4">
            <label class="form-label">No BPJS Ketenagakerjaan</label>
            <input type="text" class="form-control" placeholder="Status Pernikahan">
        </div>
        <div class="col-md-4">
            <label class="form-label">No NPWP</label>
            <input type="text" class="form-control" placeholder="Status Pernikahan">
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