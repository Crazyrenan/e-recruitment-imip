<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Reset Password</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div class="container-fluid auth-wrapper p-0">
        <div class="row g-0 h-100">
            
            <div class="col-lg-6 col-md-12">
                <div class="auth-form-section no-scrollbar">
                    <div class="w-100">
                        <a href="/" class="d-inline-block mb-5">
                            <img src="{{ asset('image/logoimip.png') }}" alt="Logo" height="40">
                        </a>

                        <h1 class="fw-bold fs-2 mb-2 text-dark">Reset Password</h1>
                        <p class="text-muted mb-5">Enter your E-mail to reset your account password</p>

                        <form action="#" method="POST">
                            @csrf
                            
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold small">Email address</label>
                                <input type="email" class="form-control bg-light" id="email" placeholder="Enter your email">
                            </div>

                            <button type="submit" class="btn-imip-green w-100 py-2 rounded-3 mb-4 shadow-sm">Reset</button>

                            <div class="auth-divider">Or</div>

                            <p class="text-center small mb-2 text-muted">
                                Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none fw-bold" style="color: #4a6fa5;">Sign Up</a>
                            </p>
                            
                            <p class="text-center small text-muted">
                                <a href="{{ route('login') }}" class="text-decoration-none text-muted">Back to Login</a>
                            </p>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="auth-image-section">
                    <div class="auth-image-bg" style="background-image: url('{{ asset('image/forgot.png') }}');"></div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>