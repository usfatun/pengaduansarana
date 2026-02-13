<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Detail Pengaduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BODY */
body {
    margin: 0;
    background: linear-gradient(135deg, #ffffff, #ffe6e6);
    min-height: 100vh;
    padding: 30px;
}

/* CARD CONTAINER */
.container {
    background: white;
    max-width: 900px;
    margin: auto;
    padding: 28px 32px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(255,0,0,0.15);
    border-top: 6px solid #c1121f;
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

h2 {
    color: #c1121f;
    font-weight: 700;
}

.back {
    text-decoration: none;
    color: #c1121f;
    font-weight: 600;
    font-size: 14px;
}

.back:hover {
    text-decoration: underline;
}

/* ALERT */
.alert-success {
    background: #ffeaea;
    color: #c1121f;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 15px;
    border-left: 5px solid #c1121f;
}

/* DETAIL GRID */
.detail-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 18px;
    margin-bottom: 20px;
}

.detail-item {
    background: #fff5f5;
    padding: 12px 15px;
    border-radius: 12px;
    border-left: 5px solid #c1121f;
    box-shadow: 0 6px 15px rgba(255,0,0,0.08);
}

.detail-item b {
    color: #c1121f;
}

/* FOTO */
.foto-box img {
    width: 100%;
    max-width: 320px;
    border-radius: 14px;
    border: 2px solid #c1121f;
    box-shadow: 0 10px 25px rgba(255,0,0,0.2);
}

/* FORM */
label {
    font-size: 14px;
    font-weight: 600;
    color: #c1121f;
}

select, textarea {
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

select:focus, textarea:focus {
    border-color: #c1121f;
    box-shadow: 0 0 6px #c1121f;
}

/* BUTTON */
button {
    padding: 12px 26px;
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    border: none;
    border-radius: 12px;
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255,0,0,0.3);

    .detail-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 18px;
    margin-bottom: 20px;
}

/* CARD STYLE */
.detail-card{
    background: #fff5f5;
    padding: 16px 18px;
    border-radius: 14px;
    box-shadow: 0 8px 18px rgba(255,0,0,0.12);
    border-left: 5px solid #c1121f;
    transition: 0.3s;
}

.detail-card:hover{
    transform: translateY(-3px);
    box-shadow: 0 12px 30px rgba(255,0,0,0.2);
}

.detail-card span{
    font-size: 13px;
    color: #c1121f;
    font-weight: 600;
}

.detail-card h4{
    margin: 5px 0 0;
    font-size: 16px;
    font-weight: 600;
    color: #333;
}

.detail-card p{
    font-size: 14px;
    margin-top: 5px;
    line-height: 1.5;
}

/* DESKRIPSI FULL WIDTH */
.detail-card.full{
    grid-column: 1 / -1;
}

/* STATUS BADGE */
.status{
    padding: 6px 14px;
    border-radius: 20px;
    display: inline-block;
    font-size: 13px;
    font-weight: bold;
    color: white;
}

.status.menunggu{ background:#f1c40f; }
.status.diproses{ background:#2980b9; }
.status.selesai{ background:#2ecc71; }
.status.ditolak{ background:#e74c3c; }

.foto-card{
    margin-top: 20px;
    padding: 15px;
    background: #fff5f5;
    border-radius: 16px;
    border-left: 5px solid #c1121f;
    box-shadow: 0 8px 20px rgba(255,0,0,0.15);
}

.foto-card img{
    width: 100%;
    max-width: 320px;
    border-radius: 14px;
    border: 2px solid #c1121f;
    box-shadow: 0 10px 25px rgba(255,0,0,0.25);
}

}
</style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>📄 Admin - Detail Pengaduan</h2>
        <a href="/admin/pengaduan" class="back">← Kembali</a>
    </div>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <!-- DETAIL PENGADUAN -->
    <div class="detail-grid">

    <div class="detail-card">
        <span>Nama Siswa</span>
        <h4>{{ $pengaduan->user->name }}</h4>
    </div>

    <div class="detail-card">
        <span>Judul Pengaduan</span>
        <h4>{{ $pengaduan->judul }}</h4>
    </div>

    <div class="detail-card status-card">
        <span>Status</span>
        <h4 class="status {{ $pengaduan->status }}">
            {{ ucfirst($pengaduan->status) }}
        </h4>
    </div>

    <div class="detail-card full">
        <span>Deskripsi</span>
        <p>{{ $pengaduan->deskripsi }}</p>
    </div>

</div>


    <!-- FOTO -->
  @if($pengaduan->foto)
<div class="foto-card">
    <h4>📷 Foto Bukti</h4>
    <img src="{{ asset('uploads/'.$pengaduan->foto) }}">
</div>
@endif


    <hr style="margin:25px 0;border:1px dashed #ffb3b3">

    <!-- FORM UPDATE STATUS -->
    <form method="POST" action="/admin/pengaduan/update/{{ $pengaduan->id }}">
        @csrf

        <label>Status Pengaduan</label>
        <select name="status">
            <option value="menunggu" {{ $pengaduan->status=='menunggu'?'selected':'' }}>Menunggu</option>
            <option value="diproses" {{ $pengaduan->status=='diproses'?'selected':'' }}>Diproses</option>
            <option value="selesai" {{ $pengaduan->status=='selesai'?'selected':'' }}>Selesai</option>
            <option value="ditolak" {{ $pengaduan->status=='ditolak'?'selected':'' }}>Ditolak</option>
        </select>

        <label>Tanggapan Admin</label>
        <textarea name="tanggapan_admin" placeholder="Tuliskan tanggapan atau solusi...">{{ $pengaduan->tanggapan_admin }}</textarea>

        <button type="submit">💾 Simpan Perubahan</button>
    </form>

</div>

</body>
</html>
