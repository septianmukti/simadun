<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerifController extends Controller
{
    public function ListVerifPengajuan()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $pengajuan = DB::table('pengajuans')
            ->join('users', 'pengajuans.user_id', '=', 'users.id')
            ->select('pengajuans.*', 'users.email', 'users.nama_perusahaan', 'users.media_name')
            ->orderBy('status', 'ASC')
            ->get();
        return view('admin.list-verif-pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function DetailPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $pengajuan = Pengajuan::find($id);
        return view('admin.detail-verif-pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function ApprovedPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        if (Auth::user()->role != 'admin') {
            abort(403);
        }
        $pengajuan = Pengajuan::find($id);
        $pengajuan->update([
            'status'         => 'disetujui'
        ]);
        return redirect()->route('list.verif.pengajuan')->with(['success' => 'Pengajuan Berhasil Disetujui!']);
    }

    public function RejectPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        if (Auth::user()->role != 'admin') {
            abort(403);
        }
        $pengajuan = Pengajuan::find($id);
        $pengajuan->update([
            'status'         => 'ditolak'
        ]);
        return redirect()->route('list.verif.pengajuan')->with(['success' => 'Pengajuan Berhasil Ditolak!']);
    }
}