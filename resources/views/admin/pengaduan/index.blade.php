<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin - Data Pengaduan</title>
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
    background: linear-gradient(135deg, #ffffff, #ffe5e5);
    min-height: 100vh;
    padding: 30px;
}

/* CONTAINER */
.container {
    background: white;
    max-width: 1200px;
    margin: auto;
    padding: 30px 35px;
    border-radius: 18px;
    box-shadow: 0 15px 40px rgba(255,0,0,0.15);
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
    font-weight: 600;
    text-decoration: none;
}

.user-info a:hover {
    text-decoration: underline;
}

/* FILTER FORM */
form select, form button, form a {
    padding: 8px 14px;
    border-radius: 8px;
    font-size: 13px;
    border: 1px solid #ddd;
}

form select:focus {
    border-color: #c1121f;
    outline: none;
    box-shadow: 0 0 5px #c1121f;
}

form button {
    background: #c1121f;
    color: white;
    border: none;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

form button:hover {
    background: #9b0d17;
}

form a {
    background: #999;
    color: white;
    text-decoration: none;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(255,0,0,0.12);
}

th, td {
    padding: 12px;
    text-align: center;
    font-size: 14px;
}

th {
    background: #c1121f;
    color: white;
}

/* ROW EFFECT */
tr:nth-child(even) {
    background: #fff5f5;
}

tr:hover {
    background: #ffe0e0;
    transition: 0.3s;
}

/* IMAGE */
td img {
    width: 70px;
    border-radius: 10px;
    border: 2px solid #c1121f;
}

/* STATUS BADGE */
.badge {
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    color: white;
}

/* STATUS COLOR */
.status-menunggu { background: #ffb703; }
.status-diproses { background: #219ebc; }
.status-selesai  { background: #48d814; }
.status-ditolak  { background: #d00000; }

/* BUTTON DETAIL */
.aksi a {
    text-decoration: none;
    background: #c1121f;
    color: white;
    padding: 6px 12px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: bold;
    transition: 0.3s;
}

.aksi a:hover {
    background: #9b0d17;
}

/* PAGINATION */
.pagination {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}

.pagination .page-link {
    padding: 6px 12px;
    border-radius: 6px;
    margin: 2px;
    background: #fff;
    border: 1px solid #c1121f;
    color: #c1121f;
}

.pagination .active .page-link {
    background: #c1121f;
    color: white;
}
.btn-cetak {
    background: linear-gradient(135deg, #c1121f, #ff4d4d);
    color: white;
    padding: 8px 16px;
    border: none;
    border-radius: 8px;
    font-size: 13px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
    box-shadow: 0 5px 12px rgba(255,0,0,0.2);
}

.btn-cetak:hover {
    background: #9b0d17;
    transform: scale(1.05);
}

/* HEADER RIGHT AREA */
.header-right {
    display: flex;
    align-items: center;
    gap: 15px;
}

</style>
</head>

<body>

<div class="container">

<div class="header">

    <h2>
        <img src="{{ asset('logo.png') }}" alt="Logo Sekolah" width="80" height="80">
        Admin - Data Pengaduan Sekolah
    </h2>

    <div class="header-right">
        <!-- TOMBOL CETAK -->
        <a href="/admin/laporan/pengaduan" target="_blank">
            <button class="btn-cetak">🖨 Cetak PDF</button>
        </a>

        <!-- USER INFO -->
        <div class="user-info">
            Login sebagai: <b>{{ session('user_name') }}</b> |
            <a href="/logout">Logout</a>
        </div>
    </div>

</div>
 
<form method="GET" action="">
<div style="display:flex; gap:10px; margin-bottom:15px; flex-wrap:wrap;">
    
    <!-- FILTER STATUS -->
    <select name="status">
        <option value="">🔍 Semua Status</option>
        <option value="menunggu" {{ request('status')=='menunggu'?'selected':'' }}>Menunggu</option>
        <option value="diproses" {{ request('status')=='diproses'?'selected':'' }}>Diproses</option>
        <option value="selesai" {{ request('status')=='selesai'?'selected':'' }}>Selesai</option>
        <option value="ditolak" {{ request('status')=='ditolak'?'selected':'' }}>Ditolak</option>
    </select>

    <!-- SORT BY -->
    <select name="sort">
        <option value="">↕ Urutkan</option>
        <option value="terbaru" {{ request('sort')=='terbaru'?'selected':'' }}>Tanggal Terbaru</option>
        <option value="terlama" {{ request('sort')=='terlama'?'selected':'' }}>Tanggal Terlama</option>
        <option value="nama" {{ request('sort')=='nama'?'selected':'' }}>Nama Siswa A-Z</option>
        <option value="status" {{ request('sort')=='status'?'selected':'' }}>Status</option>
    </select>

    <button type="submit">Filter</button>
    <a href="{{ url()->current() }}">Reset</a>
</div>
</form>


<table>
<tr>
    <th>No</th>
    <th>Tanggal Pengaduan</th>
    <th>Tanggal Tanggapan</th>
    <th>Nama Siswa</th>
    <th>Judul Pengaduan</th>
    <th>Status</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>

@foreach($data as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->created_at->format('d M Y') }}</td>
    <td>{{ $item->updated_at ? $item->updated_at->format('d M Y') : 'Belum ditanggapi' }}</td>
    <td>{{ $item->user->name }}</td>
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
        <a href="/admin/pengaduan/{{ $item->id }}">Detail</a>
    </td>
</tr>
@endforeach
</table>

</div>

{{ $data->links() }}

</body>
</html>
