<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VerifController extends Controller
{
    public function ListVerifPengajuan()
    {
        if (Auth::user()->role != 'admin') {
            abort(403); // Forbidden
        }
        try {
            $pengajuan = DB::table('pengajuans')
                ->join('users', 'pengajuans.user_id', '=', 'users.id')
                ->select('pengajuans.*', 'users.email', 'users.nama_perusahaan', 'users.media_name')
                ->orderBy('status', 'ASC')
                ->get();
            return view('admin.list-verif-pengajuan', ['pengajuan' => $pengajuan]);
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }

    public function DetailPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        try {
            $pengajuan = Pengajuan::find($id);

            if (!$pengajuan) {
                return redirect()->back()->with('error', 'Data pengajuan tidak ditemukan.');
            }

            $media = User::find($pengajuan->user_id);

            return view('admin.detail-verif-pengajuan', [
                'pengajuan' => $pengajuan,
                'media' => $media
            ]);
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $t->getMessage());
        }
    }

    public function SimpanPengajuan(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized');
        }

        $validated = $request->validate([
            'catatan' => 'nullable|string',
            'status'  => 'required|string|in:disetujui,ditolak,perbaikan',
        ]);

        try {
            $pengajuan = Pengajuan::findOrFail($id);
            $pengajuan->update($validated);

            return redirect()->route('list.verif.pengajuan')
                ->with('success', 'Pengajuan Berhasil Disimpan!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
