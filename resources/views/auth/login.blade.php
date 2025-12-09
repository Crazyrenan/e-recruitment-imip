<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Login</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh; 
            overflow: hidden; 
        }

        .login-container {
            height: 100%;
        }

        /* --- LEFT SIDE (FORM) --- */
        .login-form-section {
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

        .welcome-title {
            font-weight: 700;
            font-size: 2rem;
            margin-bottom: 8px;
            color: #000;
        }

        .welcome-subtitle {
            color: #666;
            margin-bottom: 40px;
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #000;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #fcfcfc;
            margin-bottom: 20px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #198754;
        }

        .forgot-password {
            float: right;
            font-size: 0.85rem;
            color: #4a6fa5; 
            text-decoration: none;
            font-weight: 500;
        }

        .btn-login {
            width: 100%;
            background-color: #3e563e; 
            color: white;
            padding: 12px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            margin-top: 10px;
            margin-bottom: 24px;
        }

        .btn-login:hover {
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

        .signup-text {
            text-align: center;
            font-size: 0.9rem;
            color: #333;
        }

        .signup-link {
            color: #4a6fa5;
            text-decoration: none;
            font-weight: 600;
        }

       .login-image-section {
            height: 100%;
            ing: 0 0 0 30px; 
            
            background-color: white;
        }

        .login-image-wrapper {
            width: 100%;
            height: 100%;
            background-image: url("{{ asset('image/kiri.jpg') }}"); 
            background-size: cover;
            background-position: center;
            
            border-top-left-radius: 40px; 
            border-bottom-left-radius: 40px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            
            overflow: hidden;
        }

        @media (max-width: 992px) {
            .login-image-section { display: none; } 
            body { overflow: auto; }
            .login-form-section { padding: 40px 20px; }
        }
    </style>
</head>
<body>

    <div class="container-fluid login-container p-0">
        <div class="row g-0 h-100">
            
            <div class="col-lg-6 col-md-12">
                <div class="login-form-section">
                    <a href="/"> 
                        <img src="{{ asset('image/logoimip.png') }}" alt="Logo" class="logo-img">
                    </a>

                    <h1 class="welcome-title">Welcome back!</h1>
                    <p class="welcome-subtitle">Enter your Credentials to access your account</p>

                    <form action="#" method="POST">
                        @csrf
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">

                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Name">
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" style="font-size: 0.85rem;" for="remember">
                                    Remember for 30 days
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="forgot-password">forgot password</a>
                        </div>

                        <button type="submit" class="btn-login">Login</button>

                        <div class="divider">Or</div>

                      <p class="signup-text">
                        Don't have an account? <a href="{{ route('register') }}" class="signup-link">Sign Up</a>
                      </p>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="login-image-section">
                    <div class="login-image-wrapper"></div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>