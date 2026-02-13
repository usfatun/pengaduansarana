<?php

namespace App\Http\Controllers\Admin;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use App\Models\Pengaduan;


class LaporanController extends Controller
{
    public function laporanPengaduan()
    {
        $pengaduan = Pengaduan::with('user')->get();

        $pdf = PDF::loadView('admin.pengaduan.laporan', compact('pengaduan'));
        return $pdf->download('Laporan_Pengaduan_Sekolah.pdf');
    }
}
