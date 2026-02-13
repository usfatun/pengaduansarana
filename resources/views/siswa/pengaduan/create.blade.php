<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BODY BACKGROUND */
body {
    margin: 0;
    background: linear-gradient(135deg, #ffffff, #ffe6e6);
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

/* FORM CARD */
.container {
    background: white;
    width: 550px;
    padding: 30px 35px;
    border-radius: 22px;
    box-shadow: 0 20px 50px rgba(255,0,0,0.18);
    border-top: 6px solid #c1121f;
}

/* TITLE */
h2 {
    color: #c1121f;
    font-weight: 700;
    text-align: center;
    margin-bottom: 10px;
}

/* BACK BUTTON */
.back {
    display: inline-block;
    margin-bottom: 15px;
    text-decoration: none;
    color: #c1121f;
    font-weight: 600;
    font-size: 14px;
}

.back:hover {
    text-decoration: underline;
}

/* LABEL */
label {
    font-size: 14px;
    font-weight: 600;
    color: #c1121f;
}

/* INPUT & TEXTAREA */
input, textarea {
    width: 100%;
    padding: 12px;
    margin-top: 6px;
    margin-bottom: 14px;
    border-radius: 10px;
    border: 1px solid #ffb3b3;
    font-size: 14px;
    outline: none;
    background: #fffafa;
}

textarea {
    resize: none;
    height: 120px;
}

input:focus, textarea:focus {
    border-color: #c1121f;
    box-shadow: 0 0 6px #c1121f;
}

/* BUTTON */
button {
    width: 100%;
    padding: 12px;
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    border: none;
    border-radius: 12px;
    color: white;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255,0,0,0.3);
}

/* FOOTER */
.footer {
    margin-top: 12px;
    text-align: center;
    font-size: 12px;
    color: #999;
}
</style>
</head>

<body>

<div class="container">

    <a href="/siswa/pengaduan" class="back">← Kembali ke Pengaduan Saya</a>

    <h2>📝 Form Pengaduan Sarana Sekolah</h2>

    <form method="POST" action="/siswa/pengaduan/store" enctype="multipart/form-data">
        @csrf

        <label>Judul Pengaduan</label>
        <input type="text" name="judul" placeholder="Contoh: Kursi kelas rusak" required>

        <label>Kategori</label>
        <input type="text" name="kategori" placeholder="Contoh: Sarana Kelas / Toilet / Laboratorium" required>

        <label>Lokasi</label>
        <input type="text" name="lokasi" placeholder="Contoh: Kelas XII RPL 1" required>

        <label>Deskripsi Pengaduan</label>
        <textarea name="deskripsi" placeholder="Tuliskan detail kerusakan atau masalah..." required></textarea>

        <label>Upload Foto Bukti</label>
        <input type="file" name="foto" accept="image/*">

        <button type="submit">📤 Kirim Pengaduan</button>
    </form>

    <div class="footer">
        © {{ date('Y') }} Sistem Pengaduan Sarana Sekolah
    </div>

</div>

</body>
</html>
