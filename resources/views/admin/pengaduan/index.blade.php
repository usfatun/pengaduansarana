@extends('layouts.tampilan')

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
