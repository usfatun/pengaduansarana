<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Pengaduan</title>
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

/* CARD */
.container {
    background: white;
    max-width: 900px;
    margin: auto;
    padding: 28px 32px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(255,0,0,0.15);
    border-top: 6px solid #c1121f;
}

/* HEADER */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

h2 {
    color: #c1121f;
    font-weight: 700;
}

.back {
    text-decoration: none;
    color: #c1121f;
    font-weight: bold;
    font-size: 14px;
}

.back:hover {
    text-decoration: underline;
}

/* TABLE DETAIL */
.detail-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(255,0,0,0.08);
}

.detail-table th {
    background: #c1121f;
    color: white;
    padding: 12px;
    text-align: left;
    font-size: 14px;
    width: 30%;
}

.detail-table td {
    padding: 12px;
    font-size: 14px;
    background: #fff;
    border-bottom: 1px solid #eee;
}

.detail-table tr:nth-child(even) td {
    background: #fff3f3;
}

/* STATUS BADGE */
.status-badge {
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
    display: inline-block;
}

.menunggu { background: #fff3cd; color: #856404; }
.diproses { background: #cfe2ff; color: #084298; }
.selesai { background: #d1e7dd; color: #0f5132; }
.ditolak { background: #f8d7da; color: #842029; }

/* BOX DESKRIPSI */
.desc-box {
    margin-top: 12px;
    background: #fff5f5;
    padding: 12px 15px;
    border-radius: 12px;
    border-left: 5px solid #c1121f;
    box-shadow: 0 5px 10px rgba(255,0,0,0.05);
    font-size: 14px;
}

/* FOTO */
.foto-box {
    margin-top: 15px;
}

.foto-box img {
    width: 100%;
    max-width: 320px;
    border-radius: 12px;
    border: 2px solid #c1121f;
    box-shadow: 0 10px 20px rgba(255,0,0,0.2);
}
</style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>📄 Detail Pengaduan Saya</h2>
        <a href="/siswa/pengaduan" class="back">← Kembali</a>
    </div>

    <!-- TABEL DETAIL -->
    <table class="detail-table">
        <tr>
            <th>Judul Pengaduan</th>
            <td>{{ $pengaduan->judul }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $pengaduan->kategori }}</td>
        </tr>
        <tr>
            <th>Lokasi</th>
            <td>{{ $pengaduan->lokasi }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <span class="status-badge {{ $pengaduan->status }}">
                    {{ ucfirst($pengaduan->status) }}
                </span>
            </td>
        </tr>
    </table>

    <!-- DESKRIPSI -->
    <div class="desc-box">
        <b style="color:#c1121f">Deskripsi Pengaduan</b><br>
        {{ $pengaduan->deskripsi }}
    </div>

    <!-- TANGGAPAN -->
    <div class="desc-box">
        <b style="color:#c1121f">Tanggapan Admin</b><br>
        {{ $pengaduan->tanggapan_admin ?? '-' }}
    </div>

    <!-- FOTO -->
    <div class="foto-box">
        <b style="color:#c1121f">Foto Bukti:</b><br><br>
        @if($pengaduan->foto)
            <img src="{{ asset('uploads/'.$pengaduan->foto) }}">
        @else
            <i>Tidak ada foto</i>
        @endif
    </div>

</div>

</body>
</html>
