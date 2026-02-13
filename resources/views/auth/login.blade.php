<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            margin: 0;
            background: linear-gradient(135deg, #e8c4b8, #fffaf7);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fffaf7;
            width: 420px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
            text-align: center;
        }

        /* LOGO */
        .logo img {
            width: 80px;
            margin-bottom: 10px;
            border-radius: 50%;
            background: white;
            padding: 5px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            color: #6f4e37;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 13px;
            color: #9c7c6a;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 12px;
            border-radius: 10px;
            border: 1px solid #d7b3a2;
            font-size: 14px;
            outline: none;
            background: #fff;
        }

        input:focus {
            border-color: #6f4e37;
            box-shadow: 0 0 6px #cfa18d;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #6f4e37;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5b3b2a;
        }

        .alert-error {
            background: #f8d7da;
            color: #842029;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .alert-success {
            background: #e8fff0;
            color: #008000;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        a {
            display: block;
            margin-top: 15px;
            color: #6f4e37;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            margin-top: 10px;
            font-size: 12px;
            color: #a08c80;
        }
    </style>
</head>
<body>

<div class="login-box">

    <!-- LOGO SEKOLAH -->
    <div class="logo">
        <img src="{{ asset('logo.png') }}" alt="Logo Sekolah">
    </div>

    <h2>Login</h2>
    <div class="subtitle">Silakan login untuk mengajukan pengaduan sekolah</div>

    @if(session('error'))
        <div class="alert-error">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <a href="/register">Belum punya akun? Register Siswa</a>

    <div class="footer">
        © {{ date('Y') }} Sistem Pengaduan Sekolah
    </div>

</div>

</body>
</html>
