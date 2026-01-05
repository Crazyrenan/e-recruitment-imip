@extends('layouts.dashboard')

@section('content')

<style>
    /* --- STYLE UTAMA (Sama seperti sebelumnya) --- */
    .guide-header {
        background: linear-gradient(135deg, #ffffff 0%, #f8fcfb 100%);
        border-radius: 16px; padding: 30px 40px;
        display: flex; justify-content: space-between; align-items: center;
        margin-bottom: 30px; box-shadow: 0 4px 20px rgba(0,0,0,0.03);
        border: 1px solid rgba(0,0,0,0.03);
        position: relative; overflow: hidden;
    }
    .guide-header::before {
        content: ''; position: absolute; top: 0; left: 0; bottom: 0; width: 6px; background-color: #03624C;
    }
    .guide-title { font-size: 1.8rem; font-weight: 700; color: #000; margin-bottom: 5px; }
    .guide-subtitle { color: #666; font-size: 0.95rem; margin: 0; }

    /* --- SIDEBAR NAVIGASI STICKY --- */
    .guide-sidebar-wrapper {
        position: sticky;
        top: 20px;
        max-height: 90vh;
        overflow-y: auto;
        padding-right: 10px;
    }
    /* Scrollbar cantik untuk sidebar */
    .guide-sidebar-wrapper::-webkit-scrollbar { width: 4px; }
    .guide-sidebar-wrapper::-webkit-scrollbar-thumb { background: #ccc; border-radius: 4px; }

    .nav-pills-custom .nav-link {
        color: #555; background-color: white; border: 1px solid #eee;
        margin-bottom: 8px; border-radius: 8px; padding: 10px 15px;
        font-weight: 500; font-size: 0.9rem; text-align: left;
        transition: all 0.2s; display: flex; align-items: center; justify-content: space-between;
    }
    .nav-pills-custom .nav-link:hover { background-color: #f8f9fa; color: #03624C; padding-left: 20px; }
    .nav-pills-custom .nav-link.active {
        background-color: #e8f5e9; color: #03624C; border-color: #03624C; font-weight: 600;
        box-shadow: 0 2px 5px rgba(3, 98, 76, 0.1);
    }

    /* --- KONTEN BACAAN --- */
    .guide-section {
        background: white; border-radius: 12px; padding: 30px;
        margin-bottom: 30px; border: 1px solid #eee;
        scroll-margin-top: 20px; /* Jarak aman scroll */
    }
    .section-header {
        display: flex; align-items: center; gap: 15px; margin-bottom: 20px;
        padding-bottom: 15px; border-bottom: 1px solid #eee;
    }
    .section-icon {
        width: 40px; height: 40px; background-color: #03624C; color: white;
        border-radius: 10px; display: flex; align-items: center; justify-content: center;
        font-size: 1.2rem; flex-shrink: 0;
    }
    .section-title { font-size: 1.2rem; font-weight: 700; color: #333; margin: 0; }

    /* Tabel Instruksi Modern */
    .instruction-table { width: 100%; font-size: 0.9rem; }
    .instruction-table td { padding: 12px; border-bottom: 1px solid #f0f0f0; vertical-align: top; }
    .instruction-table tr:last-child td { border-bottom: none; }
    .field-name { font-weight: 600; color: #03624C; width: 30%; }
    .field-desc { color: #555; line-height: 1.6; }

    /* Alert Khusus Lampiran */
    .file-req-box {
        background-color: #fff3cd; border: 1px solid #ffeeba;
        color: #856404; padding: 15px; border-radius: 8px;
        font-size: 0.85rem; margin-bottom: 15px; display: flex; gap: 10px;
    }
</style>

{{-- 1. HEADER --}}
<div class="guide-header">
    <div>
        <h1 class="guide-title">Buku Panduan <span style="color: #03624C;">Registrasi</span></h1>
        <p class="guide-subtitle">Panduan lengkap pengisian formulir rekrutmen online PT IMIP</p>
    </div>
    <div>
        <i class="bi bi-journal-bookmark-fill" style="font-size: 40px; color: #e8f5e9; text-shadow: 0 2px 4px rgba(0,0,0,0.1);"></i>
    </div>
</div>

<div class="row">
    
    {{-- 2. SIDEBAR NAVIGASI (Sesuai Daftar Isi PDF) --}}
    <div class="col-lg-4 mb-4">
        <div class="guide-sidebar-wrapper">
            <h6 class="fw-bold text-muted text-uppercase mb-3 small ls-1">Daftar Isi Panduan</h6>
            
            <div class="nav flex-column nav-pills-custom" id="v-pills-tab">
                <a class="nav-link active" href="#intro"><span>A. Pendahuluan</span></a>
                <a class="nav-link" href="#aturan"><span>B. Aturan Pengisian</span></a>
                <a class="nav-link" href="#personal"><span>1. Data Personal</span></a>
                <a class="nav-link" href="#peminatan"><span>2. Data Peminatan</span></a>
                <a class="nav-link" href="#pendidikan"><span>3. Data Pendidikan</span></a>
                <a class="nav-link" href="#alamat"><span>4. Data Alamat</span></a>
                <a class="nav-link" href="#pekerjaan"><span>5. Data Pekerjaan</span></a>
                <a class="nav-link" href="#kontak"><span>6. Data Kontak</span></a>
                <a class="nav-link" href="#kontakdarurat"><span>7. Data Kontak Darurat</span></a>
                <a class="nav-link" href="#AhliWaris"><span>8. Data Ahli Waris</span></a>
                <a class="nav-link" href="#keluarga"><span>9. Data Keluarga</span></a>
                <a class="nav-link" href="#kursus"><span>10. Data Kursus</span></a>
                <a class="nav-link" href="#pendukung"><span>11. Data Pendukung</span></a>
                <a class="nav-link" href="#kegiatan"><span>12. Data Kegiatan</span></a>
                <a class="nav-link" href="#sim"><span>13. Data SIM</span></a>
                <a class="nav-link" href="#lampiran"><span>14. Upload Lampiran (Penting!)</span></a>
                <a class="nav-link" href="#persetujuan"><span>15. Formulir Data Persetujuan (Penting!)</span></a>
                <a class="nav-link" href="#status"><span>D. Status Proses</span></a>  
                <a class="nav-link" href="#info"><span>E. Info Rekrutmen</span></a>
            </div>

            {{-- Tombol Download PDF Asli --}}
            <div class="mt-4 pt-3 border-top">
                <a href="{{ asset('panduan.pdf') }}" target="_blank" class="btn btn-outline-success w-100">
                    <i class="bi bi-file-earmark-pdf me-2"></i> Download PDF Asli
                </a>
            </div>
        </div>
    </div>

    {{-- 3. KONTEN (Diambil dari Text PDF) --}}
    <div class="col-lg-8">
        
        {{-- A. PENDAHULUAN --}}
        <div id="intro" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-info-circle"></i></div>
                <h3 class="section-title">Pendahuluan</h3>
            </div>
            <p class="text-muted">
                Halaman ini berisi penjelasan ringkas petunjuk penggunaan aplikasi Recruitment Online PT. Indonesia Morowali Industrial Park (IMIP). 
                Panduan ini membahas langkah-langkah dalam menggunakan fitur Panduan Registrasi, Formulir Registrasi, Status Proses, dan Info Rekrutmen.
            </p>
            <div class="alert alert-info small">
                <i class="bi bi-lightbulb me-1"></i> <strong>Tips:</strong> Sebelum mengisi formulir registrasi, sangat disarankan membaca panduan ini terlebih dahulu agar tidak terjadi kesalahan input data.
            </div>
        </div>

  {{-- B. ATURAN PENGISIAN (FORMULIR REGISTRASI) --}}
        <div id="aturan" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-warning"><i class="bi bi-exclamation-diamond"></i></div>
                <h3 class="section-title">B. Aturan Pengisian Formulir</h3>
            </div>

            <p class="text-muted mb-3">
                Formulir registrasi berisi beberapa bagian yang harus diisi oleh calon pelamar dengan teliti. 
                Mohon perhatikan indikator status di bawah ini:
            </p>

            {{-- TAMBAHAN: Foto Tampilan Overview Formulir --}}
            <div class="mb-4 text-center">
                <img src="{{ asset('image/panduan pengisian.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Tampilan Status Formulir"
                     style="max-width: 100%; height: auto;">
            </div>

            {{-- Visualisasi Status Merah/Hijau --}}
            <div class="row g-3 mb-4">
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge bg-danger"><i class="bi bi-x-circle me-1"></i> Merah</span>
                            <span class="fw-bold small text-danger">Belum Lengkap</span>
                        </div>
                        <p class="small text-muted mb-0">
                            Menandakan formulir belum diisi atau masih ada data wajib yang kosong.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 border rounded bg-light h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="badge bg-success"><i class="bi bi-check-circle me-1"></i> Hijau</span>
                            <span class="fw-bold small text-success">Sudah Lengkap</span>
                        </div>
                        <p class="small text-muted mb-0">
                            Menandakan data sudah tersimpan dan valid.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Peringatan Penting --}}
            <div class="alert alert-danger d-flex gap-3 align-items-start">
                <i class="bi bi-cone-striped fs-3 mt-1"></i>
                <div>
                    <h6 class="fw-bold mb-1">PERINGATAN PENTING!</h6>
                    <p class="small mb-2">
                        Pastikan data yang diinput sudah sesuai dan bisa dipertanggungjawabkan keasliannya.
                    </p>
                    <div class="bg-white p-2 rounded text-danger border border-danger small fw-bold">
                        <i class="bi bi-lock-fill me-1"></i> Ketika Anda menekan tombol "Selesai", data TIDAK DAPAT DIUBAH KEMBALI.
                    </div>
                </div>
            </div>
        </div>

        {{-- 1. DATA PERSONAL --}}
        <div id="personal" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-person-badge"></i></div>
                <h3 class="section-title">1. Formulir Data Personal</h3>
            </div>
            <p class="text-muted mb-3">Isi data diri Anda sesuai dengan KTP dan dokumen resmi lainnya.</p>
            
            <table class="instruction-table">
                <tr>
                    <td class="field-name">Nomor KTP</td>
                    <td class="field-desc">Isi dengan No. KTP (Kartu Tanda Penduduk)</td>
                </tr>
                <tr>
                    <td class="field-name">Kewarganegaraan</td>
                    <td class="field-desc">Pilih jenis kewarganegaraan</td>
                </tr>
                <tr>
                    <td class="field-name">Nama Lengkap</td>
                    <td class="field-desc">Isi dengan nama lengkap</td>
                </tr>
                <tr>
                    <td class="field-name">Nama Panggilan</td>
                    <td class="field-desc">Isi dengan nama panggilan</td>
                </tr>
                <tr>
                    <td class="field-name">Tempat Lahir</td>
                    <td class="field-desc">Isi dengan tempat lahir</td>
                </tr>
                <tr>
                    <td class="field-name">Tanggal Lahir</td>
                    <td class="field-desc">Isi dengan tanggal lahir</td>
                </tr>
                <tr>
                    <td class="field-name">Jenis Kelamin</td>
                    <td class="field-desc">Pilih jenis kelamin</td>
                </tr>
                <tr>
                    <td class="field-name">Agama</td>
                    <td class="field-desc">Pilih agama</td>
                </tr>
                <tr>
                    <td class="field-name">Status Pernikahan</td>
                    <td class="field-desc">Pilih status pernikahan</td>
                </tr>
                <tr>
                    <td class="field-name">Suku</td>
                    <td class="field-desc">Isi dengan suku</td>
                </tr>
                <tr>
                    <td class="field-name">Tinggi Badan</td>
                    <td class="field-desc">Isi dengan tinggi badan</td>
                </tr>
                <tr>
                    <td class="field-name">Berat Badan</td>
                    <td class="field-desc">Isi dengan berat badan</td>
                </tr>
                <tr>
                    <td class="field-name">Golongan Darah</td>
                    <td class="field-desc">Pilih golongan darah</td>
                </tr>
                <tr>
                    <td class="field-name">No BPJS Kesehatan</td>
                    <td class="field-desc">Isi dengan nomor BPJS Kesehatan</td>
                </tr>
                <tr>
                    <td class="field-name">No BPJS Ketenagakerjaan</td>
                    <td class="field-desc">Isi dengan nomor BPJS Ketenagakerjaan</td>
                </tr>
                <tr>
                    <td class="field-name">No NPWP</td>
                    <td class="field-desc">Isi dengan nomor NPWP</td>
                </tr>
            </table>
        </div>

        {{-- 2. DATA PEMINATAN --}}
        <div id="peminatan" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-briefcase"></i></div>
                <h3 class="section-title">2. Formulir Data Peminatan </h3>
            </div>
            
            <table class="instruction-table">
                <tr>
                    <td class="field-name">Kategori Lamaran</td>
                    <td class="field-desc">Pilih kategori lamaran</td>
                </tr>
                <tr>
                    <td class="field-name">Alasan / tujuan saudara bekerja di perusahaan ini</td>
                    <td class="field-desc">Isi dengan alasan / tujuan saudara bekerja di perusahaan ini</td>
                </tr>
                <tr>
                    <td class="field-name">Gaji yang diharapkan</td>
                    <td class="field-desc">Isi dengan gaji yang diharapkan</td>
                </tr>
                <tr>
                    <td class="field-name">Tunjangan lain yang saudara harapkan</td>
                    <td class="field-desc">Isi dengan tunjangan lain yang saudara harapkan selain uang yang sudah</td>
                </tr>
                <tr>
                    <td class="field-name">Fasilitas lain yang saudara harapkan</td>
                    <td class="field-desc">Isi dengan fasilitas lain yang saudara harapkan </td>
                </tr>
                <tr>
                    <td class="field-name">Saya bersedia bertugas di luar kota?</td>
                    <td class="field-desc">Pilih jawaban anda </td>
                </tr>
                <tr>
                    <td class="field-name">Saya bersedia ditempatkan diluar kota?</td>
                    <td class="field-desc">Pilih jawaban anda </td>
                </tr>
                <tr>
                    <td class="field-name">Sebutkan tujuan karir saudara!</td>
                    <td class="field-desc">Isi dengan tujuan karir saudara </td>
                </tr>
            </table>
        </div>

       {{-- 3. DATA PENDIDIKAN --}}
        <div id="pendidikan" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-mortarboard"></i></div>
                <h3 class="section-title">3. Formulir Data Pendidikan</h3>
            </div>
            
            <table class="instruction-table">
                <tr>
                    <td class="field-name">Pendidikan</td>
                    <td class="field-desc">Pilih pendidikan</td>
                </tr>
                <tr>
                    <td class="field-name">Nama sekolah / institusi</td>
                    <td class="field-desc">Isi dengan nama sekolah / institusi</td>
                </tr>
                <tr>
                    <td class="field-name">Kota</td>
                    <td class="field-desc">Isi dengan kota pendidikan terakhir</td>
                </tr>
                <tr>
                    <td class="field-name">Jurusan</td>
                    <td class="field-desc">Isi dengan jurusan</td>
                </tr>
                <tr>
                    <td class="field-name">Dari tahun</td>
                    <td class="field-desc">Isi dari tahun berapa masa pendidikan</td>
                </tr>
                <tr>
                    <td class="field-name">Sampai tahun</td>
                    <td class="field-desc">Isi sampai dengan tahun berapa masa pendidikan</td>
                </tr>
                <tr>
                    <td class="field-name">Nilai rata - rata UAN / IPK</td>
                    <td class="field-desc">Isi dengan nilai rata - rata UAN / IPK</td>
                </tr>
                <tr>
                    <td class="field-name">Prestasi yang saudara peroleh selama pendidikan</td>
                    <td class="field-desc">Isi dengan prestasi anda (jika ada)</td>
                </tr>
                <tr>
                    <td class="field-name">Siapa yang membiayai pendidikan anda ?</td>
                    <td class="field-desc">Isi dengan siapa yang membiayai sekolah anda</td>
                </tr>
            </table>
        </div>

        {{-- 4. DATA ALAMAT --}}
        <div id="alamat" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-geo-alt"></i></div>
                <h3 class="section-title">4. Formulir Data Alamat</h3>
            </div>
            
            <table class="instruction-table">
                <tr>
                    <td class="field-name">Alamat (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan alamat sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">RT/RW (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan RT/RW sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Kelurahan (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan kelurahan sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Kecamatan (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan kecamatan sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Kota/Kabupaten (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan kota/kabupaten sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Provinsi (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan provinsi sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Kode pos (sesuai KTP)</td>
                    <td class="field-desc">Isi dengan kode pos sesuai KTP</td>
                </tr>
                <tr>
                    <td class="field-name">Alamat (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan alamat sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">RT/RW (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan RT/RW sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">Kelurahan (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan kelurahan sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">Kecamatan (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan kecamatan sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">Kota/Kabupaten (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan kota/kabupaten sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">Provinsi (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan provinsi sesuai domisili</td>
                </tr>
                <tr>
                    <td class="field-name">Kode Pos (sesuai Domisili)</td>
                    <td class="field-desc">Isi dengan kode pos sesuai domisili</td>
                </tr>
            </table>
        </div>


        {{-- 5. DATA PEKERJAAN --}}
        <div id="pekerjaan" class="guide-section">
            <div class="section-header">
                <div class="section-icon"><i class="bi bi-building"></i></div>
                <h3 class="section-title">5. Formulir Data Pekerjaan</h3>
            </div>
            
            <table class="instruction-table">
                <tr>
                    <td class="field-name">Nama perusahaan</td>
                    <td class="field-desc">Isi dengan nama perusahaan</td>
                </tr>
                <tr>
                    <td class="field-name">No telepon perusahaan</td>
                    <td class="field-desc">Isi dengan telepon</td>
                </tr>
                <tr>
                    <td class="field-name">Dari tahun</td>
                    <td class="field-desc">Isi dari tahun berapa mulai bekerja</td>
                </tr>
                <tr>
                    <td class="field-name">Sampai tahun</td>
                    <td class="field-desc">Isi sampai tahun berapa masa bekerja</td>
                </tr>
                <tr>
                    <td class="field-name">Jabatan awal</td>
                    <td class="field-desc">Isi dengan jabatan awal di perusahaan tersebut</td>
                </tr>
                <tr>
                    <td class="field-name">Jabatan terakhir</td>
                    <td class="field-desc">Isi dengan jabatan terakhir di perusahaan tersebut</td>
                </tr>
                <tr>
                    <td class="field-name">Jenis pekerjaan</td>
                    <td class="field-desc">Isi dengan jenis pekerjaan</td>
                </tr>
                <tr>
                    <td class="field-name">Nama atasan (referensi)</td>
                    <td class="field-desc">Isi dengan nama atasan referensi</td>
                </tr>
                <tr>
                    <td class="field-name">No telepon referensi</td>
                    <td class="field-desc">Isi dengan nomor telepon referensi</td>
                </tr>
                <tr>
                    <td class="field-name">Range gaji</td>
                    <td class="field-desc">Pilih range gaji</td>
                </tr>
                <tr>
                    <td class="field-name">Jumlah karyawan</td>
                    <td class="field-desc">Isi dengan jumlah karyawan</td>
                </tr>
                <tr>
                    <td class="field-name">Tunjangan</td>
                    <td class="field-desc">Isi dengan jenis tunjangan yang didapatkan</td>
                </tr>
                <tr>
                    <td class="field-name">Fasilitas</td>
                    <td class="field-desc">Isi dengan fasilitas yang didapatkan</td>
                </tr>
                <tr>
                    <td class="field-name">Uraian dan tanggung jawab</td>
                    <td class="field-desc">Isi dengan tangung jawab kerja</td>
                </tr>
                <tr>
                    <td class="field-name">Alasan berhenti / keluar</td>
                    <td class="field-desc">Isi dengan alasan berhenti atau keluar dari perusahaan tersebut</td>
                </tr>
                <tr>
                    <td class="field-name">Prestasi yang pernah saudara dapatkan selama bekerja?</td>
                    <td class="field-desc">Isi dengan prestasi yang pernah anda dapatkan selama bekerja</td>
                </tr>
            </table>
        </div>

  {{-- 14. DATA LAMPIRAN --}}
        <div id="lampiran" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-danger"><i class="bi bi-file-earmark-arrow-up"></i></div>
                <h3 class="section-title text-danger">14. Formulir Data Lampiran</h3>
            </div>
            
            <p class="text-muted mb-3">
                Berkas dokumen yang diunggah harus sesuai dengan peminatan yang dipilih. Perhatikan format dan ukuran maksimal file.
            </p>

            {{-- Menampilkan Gambar Panduan --}}
            <div class="mb-4 text-center">
                <img src="{{ asset('image/panduan lampiran.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Contoh Formulir Lampiran"
                     style="max-width: 100%; height: auto;">
            </div>

            {{-- Tabel Keterangan Gambar (1,2,3) --}}
            <h6 class="fw-bold mt-4 mb-2">Keterangan Gambar:</h6>
            <table class="instruction-table mb-4">
                <tr>
                    <td class="field-name text-center" style="width: 50px;"><span class="badge bg-primary rounded-circle">1</span></td>
                    <td class="field-name">Icon Tanda Seru</td>
                    <td class="field-desc">Menandakan dokumen tersebut <strong>wajib</strong> diisi/diunggah.</td>
                </tr>
                <tr>
                    <td class="field-name text-center"><span class="badge bg-primary rounded-circle">2</span></td>
                    <td class="field-name">Tombol "Choose File"</td>
                    <td class="field-desc">Klik untuk memilih file dokumen dari komputer/HP Anda yang akan diunggah.</td>
                </tr>
                <tr>
                    <td class="field-name text-center"><span class="badge bg-primary rounded-circle">3</span></td>
                    <td class="field-name">Tombol "Unggah"</td>
                    <td class="field-desc">Setelah memilih file, <strong>wajib</strong> menekan tombol ini agar file tersimpan ke sistem.</td>
                </tr>
            </table>

            {{-- Tabel Rincian Dokumen Lengkap --}}
            <h6 class="fw-bold mt-4 mb-2">Daftar Dokumen & Persyaratan:</h6>
            <table class="instruction-table">
                {{-- DOKUMEN UMUM --}}
                <tr>
                    <td class="field-name">Surat lamaran</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Surat permohonan pelamar kerja kepada perusahaan sesuai lowongan yang tersedia.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Curriculum Vitae (CV)</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Dokumen yang menjelaskan informasi mengenai diri anda secara ringkas.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Pas foto terbaru</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Foto formal dari kepala sampai dada (harus jelas).</li>
                            <li>Format: <strong>JPEG</strong> | Ukuran Maks: <strong>200 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">KTP elektronik & NPWP</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Kartu identitas penduduk dan kartu wajib pajak.</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>200 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Kartu Keluarga</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Kartu identitas susunan keluarga.</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Ijazah & Transkrip Nilai</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Dokumen tanda tamat belajar dan kumpulan nilai akademik.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">BPJS Kesehatan Aktif</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Bukti kepesertaan jaminan kesehatan aktif.</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>200 KB</strong></li>
                        </ul>
                    </td>
                </tr>

                {{-- TAMBAHAN DOKUMEN PENDUKUNG & OPERATOR --}}
                <tr>
                    <td class="field-name">Sertifikat / Sertifikasi</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Bukti telah mengikuti kegiatan/pelatihan atau validasi kompetensi standar industri.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">SIM A</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Surat Izin Mengemudi kendaraan mobil.</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>200 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">SIM BII / BII Umum</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Untuk mengemudikan alat berat/penarik/kendaraan >3.5 ton.</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>200 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">SIO (Pilihan Operator 1-3)</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Surat Izin Operator (Alat Angkat & Angkut) yang menyangkut izin perorangan.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Surat Pengalaman Kerja</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Paklaring/Surat keterangan pernah bekerja di perusahaan tertentu.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">SKCK Aktif</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Surat Keterangan Catatan Kepolisian yang masih berlaku.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Kartu Pencari Kerja (AK 1)</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Kartu Kuning yang dikeluarkan Disnaker Kabupaten/Kota.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="field-name">Sertifikat Vaksin (Dosis 1 & 2)</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Bukti telah menerima vaksinasi Covid-19 (Semua jenis vaksin).</li>
                            <li>Format: <strong>PDF, JPEG, JPG</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
                 <tr>
                    <td class="field-name">Sertifikat Ahli K3 Umum</td>
                    <td class="field-desc">
                        <ul class="ps-3 mb-0">
                            <li>Sertifikat profesi K3 dari program KEMNAKER RI.</li>
                            <li>Format: <strong>PDF</strong> | Ukuran Maks: <strong>800 KB</strong></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>

        {{-- CEKLIST KETERSEDIAAN BERKAS --}}
        <div id="checklist" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-info"><i class="bi bi-list-check"></i></div>
                <h3 class="section-title">Checklist Berkas Fisik</h3>
            </div>

            <div class="alert alert-primary d-flex align-items-center gap-2 mb-4">
                <i class="bi bi-info-circle-fill fs-5"></i>
                <div>
                    <strong>Penting:</strong> Berkas di bawah ini <strong>wajib dibawa</strong> secara fisik pada saat tes berlangsung.
                </div>
            </div>

            {{-- FOTO 1: Tampilan Tabel Checklist --}}
            <div class="mb-4 text-center">
                {{-- Simpan potongan gambar bagian atas sebagai checklist.png --}}
                <img src="{{ asset('image/berkas.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Tabel Checklist Berkas"
                     style="max-width: 100%; height: auto;">
            </div>

            <table class="instruction-table">
                <tr>
                    <td class="field-name text-center" style="width: 50px;">1</td>
                    <td class="field-desc"><strong>Surat Lamaran</strong></td>
                </tr>
                <tr>
                    <td class="field-name text-center">2</td>
                    <td class="field-desc"><strong>Sertifikat / Sertifikasi</strong></td>
                </tr>
                <tr>
                    <td class="field-name text-center">3</td>
                    <td class="field-desc"><strong>Surat Pengalaman Kerja</strong> (Jika Ada)</td>
                </tr>
                <tr>
                    <td class="field-name text-center">4</td>
                    <td class="field-desc"><strong>SKCK Aktif</strong> (Surat Keterangan Catatan Kepolisian)</td>
                </tr>
                <tr>
                    <td class="field-name text-center">5</td>
                    <td class="field-desc"><strong>Kartu Pencari Kerja (AK 1)</strong> / Kartu Kuning</td>
                </tr>
            </table>
        </div>

        {{-- 15. DATA PERSETUJUAN --}}
        <div id="persetujuan" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-success"><i class="bi bi-check-square"></i></div>
                <h3 class="section-title">15. Formulir Data Persetujuan</h3>
            </div>

            <p class="text-muted mb-3">
                Tahap terakhir adalah menyetujui syarat & ketentuan sebelum mengirim data lamaran.
            </p>

            {{-- FOTO 2: Tampilan Kotak Persetujuan --}}
            <div class="mb-4 text-center">
                {{-- Simpan potongan gambar bagian bawah sebagai persetujuan.png --}}
                <img src="{{ asset('image/persetujuan.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Formulir Persetujuan"
                     style="max-width: 100%; height: auto;">
            </div>

            {{-- Kotak Kuning Ketentuan (Replikasi dari Gambar) --}}
            <div class="p-4 rounded mb-4" style="background-color: #fff8e1; border: 1px solid #ffe082; color: #795548;">
                <h6 class="fw-bold text-center mb-3" style="color: #f57f17;">Ketentuan dan persyaratan yang berlaku :</h6>
                <ul class="small mb-0" style="list-style-type: disc; padding-left: 20px;">
                    <li class="mb-2">
                        Dengan melakukan registrasi, maka Saudara/i telah menyetujui dan mengizinkan penggunaan Dokumen Personal / Nomor ID Saudara/i untuk kepentingan PT. IMIP dan afiliasinya.
                    </li>
                    <li>
                        Dengan ini saya menyatakan akan bertanggung jawab penuh atas kebenaran data dan keabsahan data pendukung serta dokumen terkait lainnya dalam mengikuti proses rekrutmen PT IMIP. Apabila ditemukan adanya ketidaksesuaian/pemalsuan atas informasi yang saya sampaikan, maka saya bersedia menerima konsekuensi sesuai ketentuan yang berlaku.
                    </li>
                </ul>
            </div>

            {{-- Simulasi Checkbox & Tombol --}}
            <div class="p-3 border rounded bg-light">
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                    <label class="form-check-label small text-muted" for="flexCheckChecked">
                        Dengan melakukan registrasi saya menyatakan telah membaca dan menerima ketentuan dan persyaratan yang berlaku
                    </label>
                </div>
                <button class="btn btn-success w-100 fw-bold"><i class="bi bi-send-fill me-2"></i> Kirim</button>
            </div>
        </div>
        {{-- D. STATUS PROSES --}}
        <div id="status" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-primary"><i class="bi bi-hourglass-split"></i></div>
                <h3 class="section-title">D. Status Proses Lamaran</h3>
            </div>

            <p class="text-muted mb-4">
                Status proses lamaran menampilkan riwayat aktivitas, tanggal, dan waktu proses untuk melihat sejauh mana tahapan seleksi yang telah Anda lalui.
            </p>

            {{-- FOTO: Tampilan Timeline Status --}}
            <div class="mb-4 text-center">
                {{-- Potong bagian atas gambar image_9ca581.jpg dan simpan sebagai status_proses.png --}}
                <img src="{{ asset('image/status.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Contoh Tampilan Status Proses"
                     style="max-width: 100%; height: auto;">
            </div>

            <div class="alert alert-primary d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-2">
                    <i class="bi bi-info-circle-fill fs-4"></i>
                    <span class="small">Ingin mengecek status lamaran Anda saat ini?</span>
                </div>
                {{-- Tombol Mengarah ke Halaman Status --}}
                <a href="{{ route('dashboard.status') }}" class="btn btn-sm btn-primary fw-bold">
                    Cek Status Saya <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>

        {{-- E. INFO REKRUTMEN --}}
        <div id="info" class="guide-section">
            <div class="section-header">
                <div class="section-icon bg-info"><i class="bi bi-megaphone-fill"></i></div>
                <h3 class="section-title">E. Info Rekrutmen</h3>
            </div>

            <p class="text-muted mb-4">
                Halaman ini berisi informasi penting, berita terbaru, atau pengumuman seputar kegiatan rekrutmen online PT. Indonesia Morowali Industrial Park (IMIP).
            </p>

            {{-- FOTO: Tampilan Grid Info --}}
            <div class="mb-4 text-center">
                {{-- Potong bagian bawah gambar image_9ca581.jpg dan simpan sebagai info_rekrutmen.png --}}
                <img src="{{ asset('image/info.png') }}" 
                     class="img-fluid border rounded shadow-sm" 
                     alt="Contoh Tampilan Info Rekrutmen"
                     style="max-width: 100%; height: auto;">
            </div>

            <div class="bg-light p-3 rounded border">
                <h6 class="fw-bold mb-2"><i class="bi bi-newspaper me-2"></i>Jenis Informasi yang Tersedia:</h6>
                <ul class="small text-muted mb-3">
                    <li>Pengumuman jadwal tes atau interview massal.</li>
                    <li>Informasi persyaratan khusus (misal: Sertifikat Vaksin, SKCK).</li>
                    <li>Himbauan waspada penipuan rekrutmen.</li>
                    <li>Berita seputar perkembangan kawasan industri IMIP.</li>
                </ul>
                
                {{-- Tombol Mengarah ke Halaman Info --}}
                <div class="d-grid">
                    <a href="{{ route('dashboard.info') }}" class="btn btn-outline-info fw-bold text-dark">
                        <i class="bi bi-grid-fill me-2"></i> Baca Berita & Pengumuman Terbaru
                    </a>
                </div>
            </div>
        </div>
</div>



{{-- SCRIPT: Scroll Spy Manual --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll(".guide-section");
        const navLinks = document.querySelectorAll(".nav-pills-custom .nav-link");

        window.addEventListener("scroll", () => {
            let current = "";
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                // Offset 100px agar trigger lebih pas saat scroll
                if (pageYOffset >= sectionTop - 150) { 
                    current = "#" + section.getAttribute("id");
                }
            });

            navLinks.forEach((link) => {
                link.classList.remove("active");
                if (link.getAttribute("href") === current) {
                    link.classList.add("active");
                }
            });
        });
    });
</script>

<a href="{{ asset('panduan.pdf') }}" target="_blank" class="btn-floating-pdf" title="Download PDF Asli">
    <i class="bi bi-file-earmark-pdf-fill"></i>
</a>

{{-- 2. Toast Popup (Muncul Otomatis) --}}
<div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1050;">
    <div id="pdfGuideToast" class="toast align-items-center border-0 shadow-lg" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000">
        <div class="toast-header bg-success text-white">
            <i class="bi bi-info-circle-fill me-2"></i>
            <strong class="me-auto">Info Panduan</strong>
            <small>Baru saja</small>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body bg-white text-dark rounded-bottom">
            <p class="mb-2 small">Ingin melihat tampilan UI aplikasi yang asli? Download panduan versi PDF lengkap.</p>
            <div class="d-grid">
                <a href="{{ asset('panduan.pdf') }}" target="_blank" class="btn btn-sm btn-outline-success fw-bold">
                    <i class="bi bi-download me-1"></i> Download Buku Panduan PDF
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Styling untuk Tombol Melayang (FAB) */
    .btn-floating-pdf {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background-color: #dc3545; /* Warna Merah PDF */
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        box-shadow: 0 4px 15px rgba(220, 53, 69, 0.4);
        transition: all 0.3s ease;
        z-index: 1040;
        text-decoration: none;
    }

    .btn-floating-pdf:hover {
        transform: translateY(-5px);
        background-color: #c82333;
        color: white;
        box-shadow: 0 6px 20px rgba(220, 53, 69, 0.6);
    }

    /* Animasi Masuk untuk Toast */
    .toast.show {
        animation: slideInRight 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Inisialisasi Toast Bootstrap
        var toastEl = document.getElementById('pdfGuideToast');
        var toast = new bootstrap.Toast(toastEl);
        
        // Munculkan popup setelah 3 detik halaman dimuat
        setTimeout(function() {
            toast.show();
        }, 3000);
    });
</script>

@endsection