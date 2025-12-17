<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Login</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container-fluid auth-wrapper p-0">
        <div class="row g-0 h-100">
            
            <div class="col-lg-6 col-md-12">
                <div class="auth-form-section">
                    <a href="/" class="mb-5 d-inline-block"> 
                        <img src="{{ asset('image/logoimip.png') }}" alt="Logo" height="40">
                    </a>

                    <h1 class="fw-bold fs-2 mb-2 text-dark">Welcome back!</h1>
                    <p class="text-muted mb-5">Enter your Credentials to access your account</p>

                    <form action="#" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="email" class="form-label fw-semibold small">Email address</label>
                            <input type="email" class="form-control bg-light" id="email" placeholder="Enter your email">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold small">Password</label>
                            <input type="password" class="form-control bg-light" id="password" placeholder="Enter your password">
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label small" for="remember">
                                    Remember for 30 days
                                </label>
                            </div>
                            <a href="{{ route('password.request') }}" class="text-decoration-none small fw-medium" style="color: #4a6fa5;">forgot password</a>
                        </div>

                        <button type="submit" class="btn-imip-green w-100 py-2 rounded-3 mb-4 shadow-sm">Login</button>

                        <div class="auth-divider">Or</div>

                        <p class="text-center small text-dark">
                            Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none fw-bold" style="color: #4a6fa5;">Sign Up</a>
                        </p>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="auth-image-section">
                    <div class="auth-image-bg" style="background-image: url('{{ asset('image/kiri.jpg') }}');"></div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>