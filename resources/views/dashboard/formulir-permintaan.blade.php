@extends('layouts.dashboard')

@section('content')

<div class="form-card">
    
    <div class="form-header">
        <div>
            <h1 class="form-title">Formulir Registrasi / <span>Data Permintaan</span></h1>
            <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
        </div>
        <div class="header-icon">
            <i class="bi bi-person-workspace"></i>
        </div>
    </div>

    <form action="#" method="POST">
        <div class="row">
            
            <div class="col-md-6">
                <label class="form-label">Kategori Lamaran</label>
                <select class="form-select">
                    <option selected disabled>--PILIH--</option>
                    <option value="1">Staff</option>
                    <option value="2">Lapangan</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Gaji Yang Diharapkan</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp.</span>
                    <input type="number" class="form-control mb-0" placeholder="0">
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
                    <option selected disabled>--PILIH--</option>
                    <option value="ya">Ya</option>
                    <option value="tidak">Tidak</option>
                </select>
            </div>

            <div class="col-md-6">
                <label class="form-label">Saya bersedia ditempatkan di luar kota? *</label>
                <select class="form-select">
                    <option selected disabled>--PILIH--</option>
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
            <h5 class="warning-title"><i class="bi bi-exclamation-triangle-fill"></i> Mohon diperhatikan sebelum mengisi formulir!</h5>
            <p class="warning-text">
                Pastikan data yang di input sudah sesuai dan bisa di pertanggung jawabkan keaslian datanya. 
                Ketika anda menekan tombol <strong>SELESAI</strong>, maka data akan langsung dikirim ke database kami dan 
                <strong>tidak dapat diubah kembali</strong>.
            </p>
        </div>

        <div class="action-buttons">
            <a href="{{ route('dashboard.formulir') }}" class="btn-custom btn-cancel">
                <i class="bi bi-x-circle"></i> Batal
            </a>
            <button type="button" class="btn-custom btn-save">
                <i class="bi bi-check-circle"></i> Selesai
            </button>
        </div>
    </form>
</div>

@endsection