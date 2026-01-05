@extends('layouts.dashboard')

@section('content')

<div>
    <h1 class="page-title">Status <span style="color: #03624C;">Proses</span></h1>
    <p class="page-subtitle">Status Proses Rekrutmen</p>
</div>

<div class="card border-0 shadow-sm p-4" style="background: white; border-radius: 16px;">
    
    <h2 class="section-title">Timeline Proses Rekrutmen <span style="color: #03624C;">Jonathan</span></h2>

    <div class="timeline-wrapper">
        <div class="timeline-line"></div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            
            <div class="timeline-date">
                <i class="bi bi-calendar"></i> 25 Nov 2025 - 11:44
            </div>

            <div class="status-card">
                <i class="bi bi-check-circle-fill status-icon"></i>
                <div>
                    <h5 class="status-title">Aktivasi Akun</h5>
                    <p class="status-desc">
                        Selamat! Akun Anda telah berhasil diaktivasi. Anda kini dapat menggunakan seluruh fitur yang tersedia dan mulai mengakses layanan kami.
                    </p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            
            <div class="timeline-date">
                <i class="bi bi-calendar"></i> 25 Nov 2025 - 12:50
            </div>

            <div class="status-card">
                <i class="bi bi-check-circle-fill status-icon"></i>
                <div>
                    <h5 class="status-title">Registrasi Akun</h5>
                    <p class="status-desc">
                        Terima kasih telah mendaftar. Proses pendaftaran akun Anda berhasil. Silakan cek email untuk langkah selanjutnya atau aktivasi akun agar dapat mulai menggunakan layanan kami.
                    </p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            
            <div class="timeline-date">
                <i class="bi bi-calendar"></i> 27 Nov 2025 - 23:00
            </div>

            <div class="status-card">
                <i class="bi bi-check-circle-fill status-icon"></i>
                <div>
                    <h5 class="status-title">Form sudah terisi</h5>
                    <p class="status-desc">
                        Data Anda sedang diproses, dan Anda dapat melanjutkan ke tahap berikutnya dalam proses rekrutmen.
                    </p>
                </div>
            </div>
        </div>

        <div class="timeline-item">
            <div class="timeline-dot"></div>
            
            <div class="timeline-date">
                <i class="bi bi-calendar"></i> 30 Nov 2025 - 10:00
            </div>

            <div class="status-card">
                <i class="bi bi-check-circle-fill status-icon"></i>
                <div>
                    <h5 class="status-title">Proses Interview</h5>
                    <p class="status-desc">
                        Silakan hadir sesuai waktu yang telah ditentukan. Tim kami akan menghubungi Anda untuk informasi lebih lanjut jika diperlukan.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection