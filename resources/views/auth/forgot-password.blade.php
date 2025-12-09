<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Reset Password</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* --- SHARED LAYOUT STYLES --- */
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh; 
            overflow: hidden; 
        }

        .container-fluid {
            height: 100%;
        }

        /* --- LEFT SIDE (FORM) --- */
        .reset-form-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 10%; 
            height: 100%;
            background-color: white;
        }

        .logo-img {
            height: 40px;
            margin-bottom: 40px;
        }

        .reset-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 8px;
            color: #000;
        }

        .reset-subtitle {
            color: #666;
            margin-bottom: 40px;
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #000;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #fcfcfc;
            margin-bottom: 24px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #198754;
        }

        .btn-reset {
            width: 100%;
            background-color: #3e563e; /* Dark Olive Green */
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            margin-bottom: 24px;
            transition: background 0.3s;
        }

        .btn-reset:hover {
            background-color: #2e402e;
        }

        .divider {
            text-align: center;
            position: relative;
            margin-bottom: 24px;
            color: #999;
            font-size: 0.85rem;
        }

        .divider::before, .divider::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background-color: #eee;
        }

        .divider::before { left: 0; }
        .divider::after { right: 0; }

        .bottom-text {
            text-align: center;
            font-size: 0.9rem;
            color: #333;
        }

        .bottom-link {
            color: #4a6fa5;
            text-decoration: none;
            font-weight: 600;
        }

        /* --- RIGHT SIDE (IMAGE) --- */
        .reset-image-section {
            height: 100%;
            /* Keep the gap layout consistent */
            padding: 0 0 0 30px; 
            background-color: white;
        }

        .reset-image-wrapper {
            width: 100%;
            height: 100%;
            /* Make sure to save the building image as 'reset-side.png' */
            background-image: url("{{ asset('image/forgot.png') }}"); 
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
            .reset-image-section { display: none; }
            body { overflow: auto; }
            .reset-form-section { padding: 40px 20px; }
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0 h-100">
            
            <div class="col-lg-6 col-md-12">
                <div class="reset-form-section">
                    <a href="/">
                        <img src="{{ asset('image/logoimip.png') }}" alt="Logo" class="logo-img">
                    </a>

                    <h1 class="reset-title">Reset Password</h1>
                    <p class="reset-subtitle">Enter your E-mail to reset your account password</p>

                    <form action="#" method="POST">
                        @csrf
                        
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">

                        <button type="submit" class="btn-reset">Reset</button>

                        <div class="divider">Or</div>

                        <p class="bottom-text">
                            Don't have an account? <a href="{{ route('register') }}" class="bottom-link">Sign Up</a>
                        </p>
                        
                        <p class="bottom-text mt-2">
                            <a href="{{ route('login') }}" class="bottom-link" style="color: #666; font-size: 0.85rem;">Back to Login</a>
                        </p>

                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="reset-image-section">
                    <div class="reset-image-wrapper"></div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>