<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class AdminPengaduanController extends Controller
{
    public function index(Request $request)
{
    $query = Pengaduan::with('user');

    // FILTER STATUS
    if ($request->status) {
        $query->where('status', $request->status);
    }

    // SORTING
    if ($request->sort == 'terbaru') {
        $query->orderBy('created_at', 'desc');
    } 
    elseif ($request->sort == 'terlama') {
        $query->orderBy('created_at', 'asc');
    }
    elseif ($request->sort == 'nama') {
        $query->join('users', 'pengaduans.user_id', '=', 'users.id')
              ->orderBy('users.name', 'asc')
              ->select('pengaduans.*');
    }
    elseif ($request->sort == 'status') {
        $query->orderBy('status', 'asc');
    }
    else {
        $query->latest();
    }

    $data = $query->paginate(10);

    return view('admin.pengaduan.index', compact('data'));
}





    public function show($id)
    {
        $pengaduan = Pengaduan::with('user')->findOrFail($id);
        return view('admin.pengaduan.show', compact('pengaduan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'tanggapan_admin' => 'nullable'
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->update([
            'status' => $request->status,
            'tanggapan_admin' => $request->tanggapan_admin
        ]);

        return redirect('/admin/pengaduan/'.$id)->with('success', 'Pengaduan berhasil diperbarui');
    }
}
