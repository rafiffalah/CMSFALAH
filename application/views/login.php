<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body dengan latar belakang abu terang */
        body {
            background: #f8f9fa; /* Abu terang */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            overflow: hidden;
        }

        /* Kontainer form login */
        .login-container {
            background: #fff; /* Putih */
            color: #495057; /* Abu gelap */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); /* Efek bayangan */
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        /* Judul form login */
        .login-container h2 {
            color: #495057; /* Abu gelap */
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Input fields */
        .form-control {
            border-radius: 30px;
            padding: 20px;
            font-size: 1.1rem;
            margin-bottom: 20px;
            background: #f8f9fa; /* Abu terang */
            color: #495057; /* Teks abu gelap */
            border: 1px solid #ced4da; /* Border abu-abu */
            box-shadow: none;
            transition: border-color 0.3s ease;
        }

        /* Efek saat input fokus */
        .form-control:focus {
            border-color: #495057; /* Border abu gelap */
            box-shadow: 0 0 10px rgba(128, 128, 128, 0.2); /* Glow abu */
        }

        /* Tombol login */
        .btn-primary {
            background: #6c757d; /* Abu gelap */
            color: #fff; /* Putih untuk teks */
            border: none;
            border-radius: 30px;
            padding: 12px;
            font-size: 1.2rem;
            width: 100%;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        /* Efek hover tombol */
        .btn-primary:hover {
            background: #495057; /* Abu lebih gelap saat hover */
        }

        /* Checkbox label */
        .form-check-label {
            color: #495057; /* Abu gelap */
            font-size: 0.9rem;
        }

        /* Tautan lupa password */
        .forgot-password a {
            color: #6c757d; /* Abu gelap */
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .forgot-password a:hover {
            color: #495057; /* Abu lebih gelap */
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="<?= base_url('auth/login') ?>" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" id="remember-me" class="form-check-input"> 
                    <label for="remember-me" class="form-check-label">Ingat Saya</label>
                </div>
                <div class="forgot-password">
                    <a href="#" class="text-primary">Lupa Password?</a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="<?= base_url('registrasi') ?>" > Buat Akun</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
