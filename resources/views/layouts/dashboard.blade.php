<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Dashboard</title>
    
    <script>
        if (localStorage.getItem('sidebar-state') === 'collapsed') {
            document.documentElement.classList.add('is-collapsed');
        }
    </script>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --primary: #198754;
        --primary-dark: #03624C;
        --primary-light: #e8f5e9;
        --text-dark: #1a1a1a;
        --text-light: #ffffff;
        --text-muted: #a8d5c9;
        --sidebar-width: 280px;
        --sidebar-collapsed-width: 88px;
        --bg-body: #F5F7FA;
        --bg-sidebar: #03624C;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--bg-body);
        color: var(--text-dark);
        overflow-x: hidden;
        margin: 0; padding: 0;
    }

    a { text-decoration: none; }
    ul { list-style: none; padding: 0; margin: 0; }

    .sidebar {
        width: var(--sidebar-width);
        height: 100vh;
        background-color: var(--bg-sidebar);
        position: fixed;
        top: 0; left: 0;
        display: flex; flex-direction: column;
        padding: 25px 15px;
        z-index: 2000;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 4px 0 15px rgba(0,0,0,0.05);
    }

    .sidebar-header {
        display: flex; align-items: center; justify-content: space-between;
        margin-top: 10px; margin-bottom: 30px;
        padding: 0 20px; height: 60px;
    }

    .sidebar-logo {
        background: white; padding: 6px 15px; border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        transition: all 0.2s ease; height: 40px; width: auto;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .sidebar-logo img { height: 24px; width: auto; display: block; }

    .btn-toggle {
        background: transparent; border: none; color: white;
        font-size: 1.6rem; cursor: pointer; padding: 0;
        width: 40px; height: 40px; display: flex;
        align-items: center; justify-content: center;
        border-radius: 8px; transition: background 0.2s;
    }
    .btn-toggle:hover { background-color: rgba(255,255,255,0.1); }

    .nav-list { display: flex; flex-direction: column; gap: 8px; flex-grow: 1; }

    .nav-link {
        display: flex; align-items: center; padding: 12px 16px;
        color: var(--text-muted); border-radius: 12px;
        transition: all 0.2s ease-in-out;
        font-weight: 500; font-size: 0.95rem;
        white-space: nowrap; overflow: hidden; position: relative;
    }

    .nav-link i {
        font-size: 1.25rem; min-width: 30px; text-align: center;
        margin-right: 12px; transition: margin 0.3s;
    }

    .nav-link:hover {
        color: white; background-color: rgba(255, 255, 255, 0.1);
        transform: translateX(3px);
    }

    .nav-link.active {
        background-color: white; color: var(--primary-dark);
        font-weight: 600; box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .nav-link.active:hover { transform: none; }
    
    .link-text { opacity: 1; transition: opacity 0.2s; }

    .user-profile {
        margin-top: auto; background-color: rgba(0, 0, 0, 0.2);
        border-radius: 16px; padding: 15px;
        display: flex; align-items: center; gap: 12px;
        overflow: hidden; border: 1px solid rgba(255,255,255,0.05);
    }

    .avatar-circle {
        width: 42px; height: 42px; min-width: 42px;
        background-color: #10B981; color: white;
        border-radius: 50%; display: flex; align-items: center; justify-content: center;
        font-weight: 600; border: 2px solid rgba(255,255,255,0.2);
    }

    .user-info { display: flex; flex-direction: column; white-space: nowrap; }
    .user-name { font-size: 0.9rem; font-weight: 600; color: white; }
    .user-role { font-size: 0.75rem; color: var(--text-muted); }
    
    .profile-actions { margin-left: auto; display: flex; gap: 5px; }
    .action-btn { color: var(--text-muted); cursor: pointer; padding: 5px; transition: 0.2s; }
    .action-btn:hover { color: white; }

    .is-collapsed .sidebar, .is-collapsed .main-content { transition: none !important; }

    .sidebar.collapsed, .is-collapsed .sidebar {
        width: var(--sidebar-collapsed-width); padding: 25px 12px;
    }

    .sidebar.collapsed .link-text, .sidebar.collapsed .sidebar-logo,
    .sidebar.collapsed .user-info, .sidebar.collapsed .profile-actions,
    .is-collapsed .sidebar .link-text, .is-collapsed .sidebar .sidebar-logo,
    .is-collapsed .sidebar .user-info, .is-collapsed .sidebar .profile-actions {
        opacity: 0; width: 0; display: none;
    }

    .sidebar.collapsed .nav-link, .is-collapsed .sidebar .nav-link {
        justify-content: center; padding: 12px 0;
    }
    .sidebar.collapsed .nav-link i, .is-collapsed .sidebar .nav-link i { margin-right: 0; }
    
    .sidebar.collapsed .sidebar-header, .is-collapsed .sidebar .sidebar-header {
        justify-content: center; padding: 0; margin-top: 10px;
    }
    .sidebar.collapsed .user-profile, .is-collapsed .sidebar .user-profile {
        padding: 10px; justify-content: center; background: transparent; border: none;
    }

    .main-content {
        margin-left: var(--sidebar-width); padding: 40px;
        min-height: 100vh;
        transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .main-content.collapsed, .is-collapsed .main-content {
        margin-left: var(--sidebar-collapsed-width);
    }

    .mobile-toggle-btn { display: none; }

    @media (max-width: 768px) {
        .sidebar {
            left: calc(var(--sidebar-width) * -1);
            width: var(--sidebar-width) !important;
            box-shadow: none; z-index: 2000;
        }

        .sidebar.collapsed, .is-collapsed .sidebar {
            width: var(--sidebar-width) !important;
            padding: 25px 15px !important;
        }

        .sidebar.mobile-active {
            left: 0; box-shadow: 10px 0 30px rgba(0,0,0,0.3);
        }

        .sidebar.mobile-active + .main-content::after {
            content: ''; position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5); z-index: 1999;
            backdrop-filter: blur(2px);
        }

        .sidebar.mobile-active .link-text,
        .sidebar.mobile-active .sidebar-logo,
        .sidebar.mobile-active .user-info,
        .sidebar.mobile-active .profile-actions {
            display: block !important; opacity: 1 !important; width: auto !important;
        }
        
        .sidebar.mobile-active .nav-link { justify-content: flex-start; padding: 12px 16px; }
        .sidebar.mobile-active .user-profile {
            justify-content: flex-start; padding: 15px; background: rgba(0, 0, 0, 0.2);
        }

        .main-content { margin-left: 0 !important; padding: 20px; width: 100%; }
        
        .mobile-toggle-btn {
            display: block; font-size: 2rem; color: #03624C;
            background: transparent !important; border: none !important;
            outline: none !important; box-shadow: none !important;
            padding: 0; margin-bottom: 20px; cursor: pointer;
        }
        
        .mobile-toggle-btn:focus, .mobile-toggle-btn:active { border: none; outline: none; }
    }
</style>
</head>
<body>

    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <img src="{{ asset('image/logoimip.png') }}" alt="IMIP">
            </div>
            <button class="btn-toggle" id="sidebarToggle" title="Toggle Sidebar">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="nav-list">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-fill"></i> <span class="link-text">Dashboard</span>
            </a>
            
            <a href="{{ route('dashboard.panduan') }}" class="nav-link {{ Request::routeIs('dashboard.panduan') ? 'active' : '' }}">
                <i class="bi bi-book-half"></i> <span class="link-text">Panduan Registrasi</span>
            </a>
            
            <a href="{{ route('dashboard.formulir') }}" class="nav-link {{ Request::routeIs('dashboard.formulir') ? 'active' : '' }}">
                <i class="bi bi-ui-checks"></i> <span class="link-text">Formulir Registrasi</span>
            </a>
            
            <a href="{{ route('dashboard.status') }}" class="nav-link {{ Request::routeIs('dashboard.status') ? 'active' : '' }}">
                <i class="bi bi-hourglass-split"></i> <span class="link-text">Status Proses</span>
            </a>
            
            <a href="{{ route('dashboard.info') }}" class="nav-link {{ Request::routeIs('dashboard.info') ? 'active' : '' }}">
                <i class="bi bi-megaphone-fill"></i> <span class="link-text">Info Rekrutmen</span>
            </a>
        </div>

        <div class="user-profile">
            <div class="avatar-circle">JA</div>
            
            <div class="user-info">
                <div class="user-name">Jonathan Axl</div>
                <div class="user-role">Pelamar</div>
            </div>

            <div class="profile-actions">
                <div class="action-btn" title="Settings">
                    <i class="bi bi-gear-fill"></i>
                </div>
                <div class="action-btn" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                </div>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </nav>

    <main class="main-content" id="mainContent">
        <button class="mobile-toggle-btn" id="mobileToggle">
            <i class="bi bi-list"></i>
        </button>

        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        AOS.init({ duration: 800, once: true });

        // Sidebar Logic
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const toggleBtn = document.getElementById('sidebarToggle');
        const mobileBtn = document.getElementById('mobileToggle');

        document.addEventListener('DOMContentLoaded', () => {
            if (document.documentElement.classList.contains('is-collapsed')) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('collapsed');
                
                setTimeout(() => {
                    document.documentElement.classList.remove('is-collapsed');
                }, 100); 
            }
        });

        toggleBtn.addEventListener('click', () => {
            if (window.innerWidth > 768) {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('collapsed');

                // Save State
                if (sidebar.classList.contains('collapsed')) {
                    localStorage.setItem('sidebar-state', 'collapsed');
                } else {
                    localStorage.setItem('sidebar-state', 'expanded');
                }
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