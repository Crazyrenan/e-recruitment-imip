@extends('layouts.dashboard')

@section('content')

<style>
    /* --- HEADER STYLES --- */
    .page-title {
        font-size: 2rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 5px;
    }
    
    .page-subtitle {
        color: #666;
        font-size: 0.95rem;
        margin-bottom: 30px;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #000;
        margin-bottom: 30px;
    }

    /* --- TIMELINE STYLES --- */
    .timeline-wrapper {
        position: relative;
        padding-left: 20px; /* Space for the dots */
        margin-left: 10px;  /* Offset from left screen edge */
    }

    /* The Vertical Line */
    .timeline-line {
        position: absolute;
        top: 10px; /* Start slightly below top */
        bottom: 0;
        left: 6px; /* Align with dots */
        width: 4px;
        background-color: #000; /* Black Line */
        z-index: 0;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 30px;
        z-index: 1;
    }

    /* The Dot on the Line */
    .timeline-dot {
        position: absolute;
        left: -21px; /* Align perfectly with line */
        top: 5px;
        width: 16px;
        height: 16px;
        background-color: #e0e0e0; /* Grey inside */
        border: 2px solid #fff;    /* White border to separate from line */
        border-radius: 50%;
        box-shadow: 0 0 0 1px #ccc; /* Subtle outer ring */
    }

    .timeline-date {
        font-weight: 500;
        color: #000;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 1rem;
    }

    /* --- CARD STYLES --- */
    .status-card {
        background-color: white;
        border: 1px solid #999; /* Grey border like design */
        border-radius: 4px;     /* Slight rounding, mostly boxy */
        padding: 20px;
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .status-icon {
        font-size: 1.8rem;
        color: #000; /* Black icon */
        line-height: 1;
        margin-top: -2px;
    }

    .status-title {
        font-weight: 700;
        font-size: 1.1rem;
        color: #000;
        margin-bottom: 5px;
    }

    .status-desc {
        color: #555;
        font-size: 0.9rem;
        line-height: 1.4;
        margin: 0;
    }
</style>

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