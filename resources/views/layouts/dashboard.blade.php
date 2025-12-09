<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7f9;
            overflow-x: hidden; /* Mencegah scroll horizontal saat transisi */
        }

        /* --- SIDEBAR STYLING --- */
        .sidebar {
            width: 280px;
            height: 100vh;
            background-color: #03624C;
            color: white;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            padding: 24px 16px; /* Padding kiri-kanan dikurangi sedikit */
            z-index: 1000;
            transition: all 0.3s ease; /* ANIMASI HALUS */
        }

        /* Mode "Dikecilin" (Collapsed) */
        .sidebar.collapsed {
            width: 80px;
            padding: 24px 10px;
        }

        /* Header Logo & Toggle */
        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .sidebar-logo {
            background-color: white;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s;
            overflow: hidden;
            white-space: nowrap;
        }

        .sidebar-logo img {
            height: 30px;
        }

        /* Sembunyikan Logo saat collapsed */
        .sidebar.collapsed .sidebar-logo {
            display: none; 
        }
        
        /* Tombol Toggle */
        .btn-toggle {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0;
            margin-left: auto; /* Dorong ke kanan */
        }
        
        /* Pusatkan tombol toggle saat collapsed */
        .sidebar.collapsed .btn-toggle {
            margin: 0 auto;
            margin-bottom: 20px;
        }

        /* Nav Links */
        .nav-link {
            color: #a8d5c9;
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap; /* Mencegah teks turun baris */
            overflow: hidden;
        }

        .nav-link:hover {
            color: white;
            background-color: rgba(255,255,255,0.1);
        }

        .nav-link.active {
            background-color: white;
            color: #03624C;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .nav-link i { 
            font-size: 1.3rem; 
            min-width: 30px; /* Lebar tetap untuk ikon agar sejajar */
            text-align: center;
        }

        /* Sembunyikan teks saat collapsed */
        .sidebar.collapsed .nav-link span {
            opacity: 0;
            width: 0;
            display: none;
        }

        .sidebar.collapsed .nav-link {
            justify-content: center; /* Pusatkan ikon */
            padding: 12px 0;
        }

        /* User Profile */
        .user-profile {
            margin-top: auto;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            transition: all 0.3s;
            overflow: hidden;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 20px;
            white-space: nowrap;
        }

        .avatar-circle {
            min-width: 40px; /* Mencegah avatar gepeng */
            height: 40px;
            background-color: #198754;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: white;
            border: 2px solid rgba(255,255,255,0.2);
        }

        .user-name-container {
            transition: opacity 0.3s;
        }

        /* Sembunyikan detail user saat collapsed */
        .sidebar.collapsed .user-name-container,
        .sidebar.collapsed .bottom-links {
            display: none;
        }
        
        .sidebar.collapsed .user-info {
            justify-content: center;
            margin-bottom: 0;
        }

        .bottom-links a {
            display: block;
            color: #a8d5c9;
            text-decoration: none;
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 10px;
            white-space: nowrap;
        }
        .bottom-links a:hover { color: white; }

        /* --- MAIN CONTENT STYLING --- */
        .main-content {
            margin-left: 280px; /* Default margin */
            padding: 40px;
            min-height: 100vh;
            transition: all 0.3s ease; /* Ikut animasi sidebar */
        }

        /* Margin saat sidebar mengecil */
        .main-content.collapsed {
            margin-left: 80px;
        }

        /* --- MOBILE RESPONSIVE (Layar < 768px) --- */
        @media (max-width: 768px) {
            .sidebar {
                left: -280px; /* Sembunyikan total di mobile */
            }
            .sidebar.mobile-active {
                left: 0; /* Munculkan saat aktif */
                width: 280px; /* Paksa lebar penuh di mobile */
            }
            .sidebar.mobile-active .nav-link span,
            .sidebar.mobile-active .sidebar-logo,
            .sidebar.mobile-active .user-name-container {
                display: block !important; /* Pastikan konten terlihat */
                opacity: 1 !important;
                width: auto !important;
            }
            
            .main-content {
                margin-left: 0; /* Konten full width di mobile */
                padding: 20px;
            }
            .main-content.collapsed {
                margin-left: 0;
            }
            
            /* Tombol Menu Mobile (Muncul di Main Content) */
            .mobile-toggle-btn {
                display: block !important;
                margin-bottom: 20px;
                font-size: 2rem;
                background: none;
                border: none;
                color: #03624C;
            }
        }
        
        .mobile-toggle-btn {
            display: none; /* Sembunyi di desktop */
        }
    </style>
</head>
<body>

    <nav class="sidebar" id="sidebar">
        
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="{{ asset('image/logoimip.png') }}" alt="IMIP Logo">
            </div>
            <button class="btn-toggle" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="nav flex-column">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid"></i> <span>Dashboard</span>
            </a>
            <a href="{{ route('dashboard.panduan') }}" class="nav-link {{ Request::routeIs('dashboard.panduan') ? 'active' : '' }}">
                <i class="bi bi-file-text"></i> <span>Panduan Registrasi</span>
            </a>
            <a href="{{ route('dashboard.formulir') }}" class="nav-link {{ Request::routeIs('dashboard.formulir') ? 'active' : '' }}">
                <i class="bi bi-list-check"></i> <span>Formulir Registrasi</span>
            </a>
           <a href="{{ route('dashboard.status') }}" class="nav-link {{ Request::routeIs('dashboard.status') ? 'active' : '' }}">
                <i class="bi bi-clock-history"></i> <span>Status Proses</span>
            </a>
            <a href="{{ route('dashboard.info') }}" class="nav-link {{ Request::routeIs('dashboard.info') ? 'active' : '' }}">
                <i class="bi bi-people"></i> <span>Info Rekrutmen</span>
            </a>
        </div>

        <div class="user-profile">
            <div class="user-info">
                <div class="avatar-circle">JW</div>
                <div class="user-name-container">
                    <div class="user-name" style="color: white; font-weight: 600;">Jonathan Axl</div>
                    <div style="font-size: 0.75rem; color: #a8d5c9;">Pelamar</div>
                </div>
            </div>
            <div class="bottom-links">
                <a href="#"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></a>
                <a href="#"><i class="bi bi-gear"></i> <span>Setting</span></a>
            </div>
        </div>
    </nav>

    <main class="main-content" id="mainContent">
        
        <button class="mobile-toggle-btn" id="mobileToggle">
            <i class="bi bi-list"></i>
        </button>

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('sidebarToggle');
        const mobileBtn = document.getElementById('mobileToggle');

        toggleBtn.addEventListener('click', () => {
            if (window.innerWidth > 768) {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('collapsed');
            } else {
                sidebar.classList.remove('mobile-active');
            }
        });

        mobileBtn.addEventListener('click', () => {
            sidebar.classList.add('mobile-active');
        });

        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!sidebar.contains(e.target) && !mobileBtn.contains(e.target)) {
                    sidebar.classList.remove('mobile-active');
                }
            }
        });
    </script>
</body>
</html>