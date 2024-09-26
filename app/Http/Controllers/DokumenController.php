<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokumenController extends Controller
{
    public function surat_kerjasama($surat_kerjasama)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_kerjasama/' . $surat_kerjasama);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function akta_pendirian($akta_pendirian)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/akta_pendirian/' . $akta_pendirian);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function bukti_pengesahan($bukti_pengesahan)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/bukti_pengesahan/' . $bukti_pengesahan);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function nib_siup_situ($nib_siup_situ)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/nib_siup_situ/' . $nib_siup_situ);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function sk_domisili_perusahaan($sk_domisili_perusahaan)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/sk_domisili_perusahaan/' . $sk_domisili_perusahaan);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function npwp_perusahaan($npwp_perusahaan)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/npwp_perusahaan/' . $npwp_perusahaan);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function spt($spt)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/spt/' . $spt);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function harga($harga)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/harga/' . $harga);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function referend_rekening($referend_rekening)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/referend_rekening/' . $referend_rekening);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function surat_tugas($surat_tugas)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_tugas/' . $surat_tugas);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function kartu_pers($kartu_pers)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/kartu_pers/' . $kartu_pers);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function surat_penanggungjawab($surat_penanggungjawab)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_penanggungjawab/' . $surat_penanggungjawab);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function surat_kuasa($surat_kuasa)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_kuasa/' . $surat_kuasa);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function sertifikat_pers($sertifikat_pers)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/sertifikat_pers/' . $sertifikat_pers);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function surat_kebenaran($surat_kebenaran)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_kebenaran/' . $surat_kebenaran);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    // MEDIA CETAK
    public function pernyataan_media_cetak($pernyataan_media_cetak)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/pernyataan_media_cetak/' . $pernyataan_media_cetak);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function pernyataan_oplah($pernyataan_oplah)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/pernyataan_oplah/' . $pernyataan_oplah);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    // MEDIA ELEKTRONIK
    public function surat_izin($surat_izin)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/surat_izin/' . $surat_izin);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function pernyataan_media_elektronik($pernyataan_media_elektronik)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/pernyataan_media_elektronik/' . $pernyataan_media_elektronik);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    // MEDIA SIBER
    public function pernyataan_media_siber($pernyataan_media_siber)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/pernyataan_media_siber/' . $pernyataan_media_siber);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function screenshoot_web($screenshoot_web)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/screenshoot_web/' . $screenshoot_web);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }

    public function screenshoot_data_pengunjung($screenshoot_data_pengunjung)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $file_path = public_path('pengajuan/screenshoot_data_pengunjung/' . $screenshoot_data_pengunjung);
        if (!file_exists($file_path)) {
            abort(404, 'File not found');
        }
        return response()->file($file_path);
    }
}
