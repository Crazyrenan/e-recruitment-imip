@extends('layouts.dashboard')

@section('content')

<div class="form-card">
    
    <div class="form-header">
        <div>
            <h1 class="form-title">Formulir Registrasi / <span>Data Kontak</span></h1>
            <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
        </div>
        <div class="header-icon">
            <i class="bi bi-person-lines-fill"></i>
        </div>
    </div>

    <form action="#" method="POST">
        <div class="row">
            
            <div class="col-md-6">
                <label class="form-label">Email*</label>
                <input type="email" class="form-control" value="jonathan.axlw@gmail.com" readonly>
                <span class="input-caption">Sesuai data registrasi akun</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Nomor Ponsel*</label>
                <input type="text" class="form-control" value="08113214155" readonly>
                <span class="input-caption">Cth : 08123456789</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Nomor Telepon Rumah</label>
                <input type="text" class="form-control" placeholder="021...">
                <span class="input-caption">Cth : 0213892731</span>
            </div>
        </div>

        <div class="my-5 text-center position-relative">
            <hr class="position-absolute w-100 top-50 start-0 z-0 border-secondary-subtle">
            <h5 class="position-relative d-inline-block bg-white px-4 z-1 fw-bold text-success" style="color: #03624C !important;">MEDIA SOSIAL</h5>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" placeholder="08...">
                <span class="input-caption">Jika ingin terima notifikasi via Whatsapp wajib di isi</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" placeholder="Link Profile / Username">
                <span class="input-caption">Cth : facebook.com/pelamar_pt_imip</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Instagram</label>
                <input type="text" class="form-control" placeholder="@username">
                <span class="input-caption">Cth : pelamar_pt_imip</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Twitter</label>
                <input type="text" class="form-control" placeholder="@username">
                <span class="input-caption">Cth : @pelamar_pt_imip</span>
            </div>

            <div class="col-md-6">
                <label class="form-label">Linkedin</label>
                <input type="text" class="form-control" placeholder="Nama Profil">
                <span class="input-caption">Cth : Pelamar PT IMIP</span>
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