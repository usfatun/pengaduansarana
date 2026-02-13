<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengaduan Saya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

/* BACKGROUND */
body {
    margin: 0;
    background: linear-gradient(135deg, #ffffff, #ffe6e6);
    min-height: 100vh;
    padding: 30px;
}

/* CONTAINER CARD */
.container {
    background: white;
    max-width: 1100px;
    margin: auto;
    padding: 30px 35px;
    border-radius: 22px;
    box-shadow: 0 20px 50px rgba(255,0,0,0.18);
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

/* USER INFO */
.user-info {
    font-size: 14px;
    color: #555;
}

.user-info a {
    color: #c1121f;
    font-weight: bold;
    text-decoration: none;
}

.user-info a:hover {
    text-decoration: underline;
}

/* BUTTON ADD */
.btn-add {
    display: inline-block;
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    color: white;
    padding: 10px 20px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    transition: 0.3s;
}

.btn-add:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(255,0,0,0.3);
}

/* ALERT */
.alert-success {
    background: #e8fff0;
    color: #008000;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(255,0,0,0.12);
}

th, td {
    padding: 14px 12px;
    text-align: center;
    font-size: 14px;
}

th {
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    color: white;
    font-size: 14px;
}

/* ROW STYLE */
tr:nth-child(even) {
    background: #fff5f5;
}

tr:hover {
    background: #ffe1e1;
    transition: 0.3s;
}

/* IMAGE */
td img {
    width: 75px;
    border-radius: 10px;
    box-shadow: 0 8px 18px rgba(255,0,0,0.2);
}

/* STATUS BADGE */
.badge {
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: bold;
    color: white;
    display: inline-block;
}

.status-menunggu {
    background: linear-gradient(135deg, #ffb703, #fb8500);
}

.status-diproses {
    background: linear-gradient(135deg, #4361ee, #4cc9f0);
}

.status-selesai {
    background: linear-gradient(135deg, #2ecc71, #27ae60);
}

.status-ditolak {
    background: linear-gradient(135deg, #d90429, #ef233c);
}

/* ACTION LINK */
.aksi a {
    margin: 0 5px;
    text-decoration: none;
    font-size: 13px;
    font-weight: bold;
}

.detail {
    color: #c1121f;
}

.hapus {
    color: #d90429;
}

.aksi a:hover {
    text-decoration: underline;
}
</style>
</head>

<body>

<div class="container">

    <div class="header">
        <h2>📋 Pengaduan Saya</h2>
        <div class="user-info">
            Login sebagai: <b>{{ session('user_name') }}</b> | 
            <a href="/logout">Logout</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <a href="/siswa/pengaduan/create" class="btn-add">+ Buat Pengaduan</a>

    <table>
        <tr>
            <th>No</th>
            <th>Tanggal Pengaduan</th>
            <th>Tanggal Tanggapan</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        @foreach($data as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->created_at->format('d M Y') }}</td>
            <td>{{ $item->updated_at ? $item->updated_at->format('d M Y') : 'Belum ditanggapi' }}</td>
            <td>{{ $item->judul }}</td>
            <td>
                @if($item->status == 'menunggu')
                    <span class="badge status-menunggu">Menunggu</span>
                @elseif($item->status == 'diproses')
                    <span class="badge status-diproses">Diproses</span>
                @elseif($item->status == 'ditolak')
                    <span class="badge status-ditolak">Ditolak</span>
                @else
                    <span class="badge status-selesai">Selesai</span>
                @endif
            </td>

            <td>
                @if($item->foto)
                    <img src="{{ asset('uploads/'.$item->foto) }}">
                @else
                    <i>Tidak ada</i>
                @endif
            </td>

            <td class="aksi">
                <a class="detail" href="/siswa/pengaduan/{{ $item->id }}">Detail</a> |
                <a class="hapus" onclick="return confirm('Yakin hapus?')" href="/siswa/pengaduan/delete/{{ $item->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>
