<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Register</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- COPYING LOGIN PAGE STYLES --- */
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh; 
            overflow: hidden; /* Keeps the whole page fixed like Login */
        }

        .container-fluid {
            height: 100%;
        }

        /* --- LEFT SIDE (FORM) --- */
        .register-form-section {
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centers form vertically */
            padding: 0 10%; /* Same padding as Login */
            height: 100%;
            background-color: white;
            
            /* ALLOW SCROLL ONLY IF NEEDED (because reg form is tall) */
            overflow-y: auto; 
        }
        
        /* Hide scrollbar for cleaner look */
        .register-form-section::-webkit-scrollbar { display: none; }

        .logo-img {
            height: 40px;
            margin-bottom: 20px; /* Reduced from 40px to save space */
        }

        .register-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 5px;
            color: #000;
        }

        .register-subtitle {
            color: #666;
            margin-bottom: 25px; /* Reduced from 40px */
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.85rem; /* Slightly smaller to fit more fields */
            color: #000;
            margin-bottom: 4px;
        }

        .form-control {
            padding: 10px; /* Slightly smaller padding */
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #fcfcfc;
            margin-bottom: 12px; /* Tighter spacing (was 20px in login) */
            font-size: 0.9rem;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #198754;
        }

        .btn-register {
            width: 100%;
            background-color: #3e563e; 
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            margin-top: 5px;
            margin-bottom: 20px;
            transition: background 0.3s;
        }

        .btn-register:hover {
            background-color: #2e402e;
        }

        .or-divider {
            text-align: center;
            font-size: 0.8rem;
            color: #999;
            margin-bottom: 15px;
            position: relative;
        }
        
        .or-divider::before, .or-divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background-color: #eee;
        }
        .or-divider::before { left: 0; }
        .or-divider::after { right: 0; }

        .bottom-link {
            text-align: center;
            font-size: 0.85rem;
            color: #333;
            margin-bottom: 5px;
        }

        .bottom-link a {
            color: #4a6fa5;
            text-decoration: none;
            font-weight: 600;
        }

        .register-image-section {
            height: 100%;
            padding: 0 0 0 30px; 
            background-color: white;
        }

        .register-image-wrapper {
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('image/signup.jpg') }}"); 
            background-size: cover;
            background-position: center;
            
            /* Rounded ONLY on Left */
            border-top-left-radius: 40px;
            border-bottom-left-radius: 40px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            
            overflow: hidden;
        }

        @media (max-width: 992px) {
            .register-image-section { display: none; }
            body { overflow: auto; }
            .register-form-section { padding: 40px 20px; height: auto; }
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0 h-100">
            
            <div class="col-lg-6 col-md-12">
                <div class="register-form-section">
                    <div class="pt-4"> <a href="/">
                            <img src="{{ asset('image/logoimip.png') }}" alt="Logo" class="logo-img">
                        </a>
                    </div>

                    <h1 class="register-title">Form Registrasi</h1>
                    <p class="register-subtitle">Fill all the required to register</p>

                    <form action="#" method="POST">
                        @csrf
                        
                        <div class="mb-1">
                            <label for="ktp" class="form-label">Nomor KTP</label>
                            <input type="text" class="form-control" id="ktp" placeholder="Nomor KTP*">
                        </div>

                        <div class="mb-1">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Lengkap*">
                        </div>

                        <div class="mb-1">
                            <label for="phone" class="form-label">Nomor Telpon</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Nomor Telpon*">
                        </div>

                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Alamat Email*">
                        </div>

                        <div class="mb-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password*">
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Ulangi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Ulangi Password*">
                        </div>

                        <button type="submit" class="btn-register">Register</button>

                        <div class="or-divider">Or</div>

                        <p class="bottom-link">
                            Belum terima email aktivasi? <a href="#">Kirim Ulang</a>
                        </p>
                        
                        <p class="bottom-link pb-4">
                            Already have an account? <a href="{{ route('login') }}">Login</a>
                        </p>

                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="register-image-section">
                    <div class="register-image-wrapper"></div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>