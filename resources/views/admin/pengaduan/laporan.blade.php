<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Pengaduan Sekolah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            border-bottom: 3px solid black;
            padding-bottom: 10px;
        }

        .header h2 {
            margin: 0;
        }

        .info {
            margin-top: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }

        .footer {
            margin-top: 30px;
            text-align: right;
        }
    </style>
</head>

<body>

<div class="header">
    <h2>LAPORAN PENGADUAN SARANA SEKOLAH</h2>
    <p>SMK Muhammadiyah 1 Bantul</p>
    <p>Tahun {{ date('Y') }}</p>
</div>

<div class="info">
    <p>Tanggal Cetak: {{ date('d-m-Y') }}</p>
</div>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Status</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengaduan as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->user->name ?? '-' }}</td>
            <td>{{ $p->judul }}</td>
            <td>{{ $p->kategori }}</td>
            <td>{{ $p->lokasi }}</td>
            <td>{{ strtoupper($p->status) }}</td>
            <td>{{ $p->created_at->format('d-m-Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="footer">
    <p>Bantul, {{ date('d F Y') }}</p>
    <p>Kepala Sekolah</p>
    <br><br>
    <p><b>Harimawan, S.Pd.T, M.Si</b></p>
</div>

</body>
</html>
