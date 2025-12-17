<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMIP - Register</title>
    
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
                        <a href="/" class="d-inline-block mb-3">
                            <img src="{{ asset('image/logoimip.png') }}" alt="Logo" height="40">
                        </a>

                        <h1 class="fw-bold fs-2 mb-1 text-dark">Form Registrasi</h1>
                        <p class="text-muted mb-4 small">Fill all the required to register</p>

                        <form action="#" method="POST">
                            @csrf
                            
                            <div class="mb-2">
                                <label for="ktp" class="form-label fw-bold small mb-1">Nomor KTP</label>
                                <input type="text" class="form-control bg-light form-control-sm py-2" id="ktp" placeholder="Nomor KTP*">
                            </div>

                            <div class="mb-2">
                                <label for="name" class="form-label fw-bold small mb-1">Nama Lengkap</label>
                                <input type="text" class="form-control bg-light form-control-sm py-2" id="name" placeholder="Nama Lengkap*">
                            </div>

                            <div class="mb-2">
                                <label for="phone" class="form-label fw-bold small mb-1">Nomor Telpon</label>
                                <input type="tel" class="form-control bg-light form-control-sm py-2" id="phone" placeholder="Nomor Telpon*">
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label fw-bold small mb-1">Email</label>
                                <input type="email" class="form-control bg-light form-control-sm py-2" id="email" placeholder="Alamat Email*">
                            </div>

                            <div class="mb-2">
                                <label for="password" class="form-label fw-bold small mb-1">Password</label>
                                <input type="password" class="form-control bg-light form-control-sm py-2" id="password" placeholder="Password*">
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label fw-bold small mb-1">Ulangi Password</label>
                                <input type="password" class="form-control bg-light form-control-sm py-2" id="password_confirmation" placeholder="Ulangi Password*">
                            </div>

                            <button type="submit" class="btn-imip-green w-100 py-2 rounded-3 mb-3 shadow-sm">Register</button>

                            <div class="auth-divider">Or</div>

                            <div class="text-center small">
                                <p class="mb-1 text-muted">
                                    Belum terima email aktivasi? <a href="#" class="text-decoration-none fw-bold" style="color: #4a6fa5;">Kirim Ulang</a>
                                </p>
                                <p class="text-muted pb-4">
                                    Already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-bold" style="color: #4a6fa5;">Login</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <div class="auth-image-section">
                    <div class="auth-image-bg" style="background-image: url('{{ asset('image/signup.jpg') }}');"></div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>