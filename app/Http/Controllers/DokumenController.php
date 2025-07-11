<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenController extends Controller
{
    public function downloadFile($folder, $filename)
{
    if (!Auth::check()) {
        return redirect('login');
    }

    try {
        $allowedFolders = [
            'surat_kerjasama',
            'akta_pendirian',
            'bukti_pengesahan',
            'nib_siup_situ',
            'sk_domisili_perusahaan',
            'npwp_perusahaan',
            'spt',
            'harga',
            'referend_rekening',
            'surat_tugas',
            'kartu_pers',
            'surat_penanggungjawab',
            'surat_kuasa',
            'sertifikat_pers',
            'surat_kebenaran',
            'sertifikat_ukw',
            'pernyataan_media_cetak',
            'pernyataan_oplah',
            'surat_izin',
            'pernyataan_media_elektronik',
            'pernyataan_media_siber',
            'screenshoot_web',
            'screenshoot_data_pengunjung'
        ];

        if (!in_array($folder, $allowedFolders)) {
            abort(403, 'Tidak ada akses!');
        }

        $file_path = public_path('pengajuan/' . $folder . '/' . $filename);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    } catch (\Throwable $t) {
        return redirect()->back()->with('error', $t->getMessage());
    }
}
}
