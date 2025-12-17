@extends('layouts.dashboard')

@section('content')

<div class="form-card">
    
    <div class="form-header">
        <div>
            <h1 class="form-title">Formulir Registrasi / <span>Data Personal</span></h1>
            <p class="form-subtitle">Formulir Registrasi Calon Karyawan</p>
        </div>
        <div class="header-icon">
            <i class="bi bi-person-badge"></i>
        </div>
    </div>

    <form action="#" method="POST">
        <div class="row">
            
            <div class="col-md-6">
                <label class="form-label">Nomor KTP *</label>
                <input type="text" class="form-control" value="7777777777777777" readonly>
                <span class="input-caption"><i class="bi bi-info-circle"></i> Sesuai data registrasi akun</span>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-select">
                            <option selected disabled>Pilih...</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nama Panggilan</label>
                        <input type="text" class="form-control" placeholder="Nama Panggilan">
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" value="Jonathan Axl W" readonly>
                <span class="input-caption"><i class="bi bi-info-circle"></i> Sesuai data registrasi akun</span>
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
                            <option selected disabled>Pilih Agama</option>
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
                <input type="text" class="form-control" value="1999-01-01" readonly>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Status Pernikahan</label>
                        <select class="form-select">
                            <option selected disabled>Pilih...</option>
                            <option value="single">Lajang</option>
                            <option value="married">Menikah</option>
                        </select>
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
                    <input type="number" class="form-control mb-0" placeholder="0">
                    <span class="input-group-text">cm</span>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label">Berat Badan</label>
                <div class="input-group mb-3">
                    <input type="number" class="form-control mb-0" placeholder="0">
                    <span class="input-group-text">kg</span>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label">Golongan Darah</label>
                <select class="form-select">
                    <option selected disabled>Pilih...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                </select>
            </div>

            <div class="col-md-4">
                <label class="form-label">No BPJS Kesehatan</label>
                <input type="text" class="form-control" placeholder="Nomor BPJS">
                <span class="input-caption">Wajib sudah memiliki BPJS Kesehatan</span>
            </div>
            <div class="col-md-4">
                <label class="form-label">No BPJS Ketenagakerjaan</label>
                <input type="text" class="form-control" placeholder="Nomor BPJS TK">
            </div>
            <div class="col-md-4">
                <label class="form-label">No NPWP</label>
                <input type="text" class="form-control" placeholder="Nomor NPWP">
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
            
            <button type="submit" class="btn-custom btn-save">
                <i class="bi bi-check-circle"></i> Selesai
            </button>
        </div>
    </form>
</div>

@endsection