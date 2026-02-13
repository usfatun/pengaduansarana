<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Siswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f8d7da, #e8c4b8);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .register-box {
            background: #fffaf7;
            width: 380px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            text-align: center;
        }

        .logo {
            width: 90px;
            margin-bottom: 10px;
        }

        h2 {
            color: #6f4e37;
            margin-bottom: 20px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 8px;
            border: 1px solid #d7b3a2;
            background: #fff;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #6f4e37;
            box-shadow: 0 0 5px #cfa18d;
        }

        button {
            width: 100%;
            background: #6f4e37;
            color: white;
            border: none;
            padding: 12px;
            margin-top: 15px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5b3b2a;
        }

        .msg-success {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
        }

        a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #6f4e37;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="register-box">

    <!-- LOGO SEKOLAH -->
    <img src="{{ asset('logo.png') }}" class="logo" alt="Logo Sekolah">

    <h2>Register Siswa</h2>

    @if(session('success'))
        <p class="msg-success">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>

    <a href="/login">Sudah punya akun? Login</a>

</div>

</body>
</html>
