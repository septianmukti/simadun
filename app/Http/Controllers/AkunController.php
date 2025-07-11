<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pengajuan;

class AkunController extends Controller
{
    public function ViewApprovalAkun()
    {
        try {
            $users = User::where('id', '!=', Auth::id())
                ->where('account_status', 'inactive')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.account-approval', [
                'userinactive' => $users,
            ]);
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }

    public function ViewAktifAkun()
    {
        try {
            $users = User::where('id', '!=', Auth::id())
                ->where('account_status', 'active')
                ->orderBy('id', 'desc')
                ->get();

            return view('admin.account-active', [
                'useractive' => $users,
            ]);
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }

    public function ActiveAccount($id)
    {
        try {
            // Cek apakah user login adalah admin
            if (Auth::user()->role !== 'admin') {
                return redirect()->back()->with('error', 'Anda tidak memiliki akses!');
            }

            $user = User::findOrFail($id);

            if ($user->account_status === 'active') {
                return redirect()->back()->with('info', 'Akun sudah aktif sebelumnya.');
            }

            $user->account_status = 'active';
            $user->save();

            return redirect()->back()->with('success', 'Akun sudah berhasil di-approve!');
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }

    public function DeleteApprovalAkun($id)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (Auth::user()->role !== 'admin') {
            return response()->json(['error' => 'Forbidden'], 403);
        }

        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json(['success' => true]);
        } catch (\Throwable $t) {
            return response()->json(['error' => $t->getMessage()], 500);
        }
    }

    public function DeleteAktifAkun($id)
    {
        try {
            // Cari user berdasarkan ID
            $user = User::find($id);
            if (!$user) {
                return response()->json(['error' => 'User tidak ditemukan!'], 404);
            }
            // Ambil semua pengajuan milik user (jika ada)
            $pengajuanList = Pengajuan::where('user_id', $user->id)->get();

            foreach ($pengajuanList as $pengajuan) {
                // Daftar file yang akan dihapus
                $filesDelete = [
                    public_path('pengajuan/surat_kerjasama/' . $pengajuan->surat_permohonan_kerjasama),
                    public_path('pengajuan/akta_pendirian/' . $pengajuan->akta_pendirian_dan_perubahan),
                    public_path('pengajuan/bukti_pengesahan/' . $pengajuan->bukti_pengesahan),
                    public_path('pengajuan/nib_siup_situ/' . $pengajuan->nib_siup_situ),
                    public_path('pengajuan/sk_domisili_perusahaan/' . $pengajuan->sk_domisili_perusahaan),
                    public_path('pengajuan/npwp_perusahaan/' . $pengajuan->npwp_perusahaan),
                    public_path('pengajuan/spt/' . $pengajuan->spt_terakhir),
                    public_path('pengajuan/harga/' . $pengajuan->daftar_harga),
                    public_path('pengajuan/referend_rekening/' . $pengajuan->referend_dan_rekening_bank),
                    public_path('pengajuan/surat_tugas/' . $pengajuan->surat_tugas),
                    public_path('pengajuan/kartu_pers/' . $pengajuan->kartu_pers),
                    public_path('pengajuan/surat_penanggungjawab/' . $pengajuan->surat_pernyataan_penanggungjawab),
                    public_path('pengajuan/surat_kuasa/' . $pengajuan->surat_kuasa),
                    public_path('pengajuan/sertifikat_pers/' . $pengajuan->sertifikat_verif_dewan_pers),
                    public_path('pengajuan/surat_kebenaran/' . $pengajuan->surat_pernyataan_kebenaran),
                    public_path('pengajuan/sertifikat_ukw/' . $pengajuan->sertifikat_ukw),
                ];
                // Tambahan file berdasarkan jenis perusahaan
                if ($pengajuan->user_jenis_perusahaan == 'media-cetak') {
                    $filesDelete = array_merge($filesDelete, [
                        public_path('pengajuan/pernyataan_media_cetak/' . $pengajuan->surat_pernyataan_media_cetak),
                        public_path('pengajuan/pernyataan_oplah/' . $pengajuan->surat_pernyataan_jumlah_oplah),
                    ]);
                } elseif ($pengajuan->user_jenis_perusahaan == 'media-elektronik') {
                    $filesDelete = array_merge($filesDelete, [
                        public_path('pengajuan/surat_izin/' . $pengajuan->izin_siaran_media_elektronik),
                        public_path('pengajuan/pernyataan_media_elektronik/' . $pengajuan->surat_pernyataan_media_elektronik),
                    ]);
                } elseif ($pengajuan->user_jenis_perusahaan == 'media-siber') {
                    $filesDelete = array_merge($filesDelete, [
                        public_path('pengajuan/pernyataan_media_siber/' . $pengajuan->surat_pernyataan_media_siber),
                        public_path('pengajuan/screenshoot_web/' . $pengajuan->screenshoot_perusahaan_media_siber),
                        public_path('pengajuan/screenshoot_data_pengunjung/' . $pengajuan->screenshoot_data_pengunjung_web),
                    ]);
                }
                // Hapus file
                foreach ($filesDelete as $file) {
                    if ($file && file_exists($file)) {
                        @unlink($file);
                    }
                }
                // Hapus data pengajuan
                $pengajuan->delete();
            }
            // Setelah semua pengajuan dihapus, hapus user
            $user->delete();
            
            return response()->json(['success' => 'User dan semua pengajuan berhasil dihapus!']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }
}
