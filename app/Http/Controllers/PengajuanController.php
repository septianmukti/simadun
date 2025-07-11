<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Pengajuan;
use Illuminate\Support\Carbon;

class PengajuanController extends Controller
{
    public function ViewPengajuan()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $pengajuan = Pengajuan::orderBy('created_at', 'DESC')
            ->where('user_id', Auth::user()->id)
            ->get();
        return view('user.pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function ViewFormPengajuan()
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        return view('user.pengajuan-form');
    }

    public function UploadPengajuan(Request $request)
    {
        if (Auth::user()->role !== 'user') {
            return abort(403);
        }

        $commonFiles = [
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
            'sertifikat_ukw'
        ];

        $rules = array_fill_keys($commonFiles, 'required|mimes:pdf|max:3072');
        $rules['link_katalog'] = ['required', 'string', 'max:255'];

        $request->validate($rules);

        $uploadedFiles = [];

        foreach ($commonFiles as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move("pengajuan/{$field}", $filename);
                $uploadedFiles[$field] = $filename;
            }
        }

        // Validasi dan upload tambahan berdasarkan jenis perusahaan
        $jenis = Auth::user()->jenis_perusahaan;

        $additionalFiles = [];

        if ($jenis === 'media-cetak') {
            $request->validate([
                'pernyataan_media_cetak' => 'required|mimes:pdf|max:3072',
                'pernyataan_oplah' => 'required|mimes:pdf|max:3072',
            ]);

            foreach (['pernyataan_media_cetak', 'pernyataan_oplah'] as $field) {
                $file = $request->file($field);
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move("pengajuan/{$field}", $filename);
                $additionalFiles[$field] = $filename;
            }
        } elseif ($jenis === 'media-elektronik') {
            $request->validate([
                'surat_izin' => 'required|mimes:pdf|max:3072',
                'pernyataan_media_elektronik' => 'required|mimes:pdf|max:3072',
            ]);

            foreach (['surat_izin', 'pernyataan_media_elektronik'] as $field) {
                $file = $request->file($field);
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move("pengajuan/{$field}", $filename);
                $additionalFiles[$field] = $filename;
            }
        } elseif ($jenis === 'media-siber') {
            $request->validate([
                'pernyataan_media_siber' => 'required|mimes:pdf|max:3072',
                'screenshoot_web' => 'required|mimes:pdf|max:3072',
                'screenshoot_data_pengunjung' => 'required|mimes:pdf|max:3072',
            ]);

            foreach (['pernyataan_media_siber', 'screenshoot_web', 'screenshoot_data_pengunjung'] as $field) {
                $file = $request->file($field);
                $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
                $file->move("pengajuan/{$field}", $filename);
                $additionalFiles[$field] = $filename;
            }
        }

        try {
            $pengajuanData = [
                'user_id' => Auth::user()->id,
                'user_jenis_perusahaan' => $jenis,
                'link_e_katalog' => $request->link_katalog,
                'created_at' => Carbon::now(),
            ];

            // mapping field database sesuai nama field yang diupload
            $fieldMapping = [
                'surat_kerjasama' => 'surat_permohonan_kerjasama',
                'akta_pendirian' => 'akta_pendirian_dan_perubahan',
                'bukti_pengesahan' => 'bukti_pengesahan',
                'nib_siup_situ' => 'nib_siup_situ',
                'sk_domisili_perusahaan' => 'sk_domisili_perusahaan',
                'npwp_perusahaan' => 'npwp_perusahaan',
                'spt' => 'spt_terakhir',
                'harga' => 'daftar_harga',
                'referend_rekening' => 'referend_dan_rekening_bank',
                'surat_tugas' => 'surat_tugas',
                'kartu_pers' => 'kartu_pers',
                'surat_penanggungjawab' => 'surat_pernyataan_penanggungjawab',
                'surat_kuasa' => 'surat_kuasa',
                'sertifikat_pers' => 'sertifikat_verif_dewan_pers',
                'surat_kebenaran' => 'surat_pernyataan_kebenaran',
                'sertifikat_ukw' => 'sertifikat_ukw',
            ];

            foreach ($uploadedFiles as $inputField => $fileName) {
                if (isset($fieldMapping[$inputField])) {
                    $pengajuanData[$fieldMapping[$inputField]] = $fileName;
                }
            }

            // tambah field khusus berdasarkan jenis
            if ($jenis === 'media-cetak') {
                $pengajuanData['surat_pernyataan_media_cetak'] = $additionalFiles['pernyataan_media_cetak'];
                $pengajuanData['surat_pernyataan_jumlah_oplah'] = $additionalFiles['pernyataan_oplah'];
            } elseif ($jenis === 'media-elektronik') {
                $pengajuanData['izin_siaran_media_elektronik'] = $additionalFiles['surat_izin'];
                $pengajuanData['surat_pernyataan_media_elektronik'] = $additionalFiles['pernyataan_media_elektronik'];
            } elseif ($jenis === 'media-siber') {
                $pengajuanData['surat_pernyataan_media_siber'] = $additionalFiles['pernyataan_media_siber'];
                $pengajuanData['screenshoot_perusahaan_media_siber'] = $additionalFiles['screenshoot_web'];
                $pengajuanData['screenshoot_data_pengunjung_web'] = $additionalFiles['screenshoot_data_pengunjung'];
            }

            Pengajuan::create($pengajuanData);

            return redirect('list-pengajuan')
                ->with('success', 'Permohonan pengajuan kerjasama Anda telah berhasil dibuat!');
        } catch (\Throwable $t) {
            return redirect()->back()->with('error', $t->getMessage());
        }
    }

    public function LihatPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $pengajuan = Pengajuan::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$pengajuan) {
            abort(403, 'Tidak ada akses!');
        }

        return view('user.detail-pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function delete($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        try {
            $pengajuan = Pengajuan::find($id);
            if (!$pengajuan) {
                return response()->json(['error' => 'Pengajuan tidak ditemukan!'], 404);
            }

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

            // Menambahkan file sesuai dengan jenis perusahaan
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
                if (file_exists($file)) {
                    unlink($file);
                }
            }

            // Hapus data pengajuan
            $pengajuan->delete();

            return response()->json(['success' => 'User dan semua pengajuan berhasil dihapus!']);
        } catch (\Exception $e) {
            // Tangani error jika ada masalah
            return response()->json(['error' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    }

    public function UpdatePengajuan(Request $request)
    {
        $pengajuan = Pengajuan::find($request->id);
        if (!$pengajuan) {
            return back()->with('error', 'Data pengajuan tidak ditemukan.');
        }

        // Validasi
        $allowedNumbers = range(1, 24);
        $request->validate([
            'file_type' => ['bail', 'required_without_all:document_file,link_katalog', 'integer', 'in:' . implode(',', $allowedNumbers)],
            'document_file' => 'required_without:link_katalog|nullable|mimes:pdf|max:3072',
            'link_katalog' => 'required_without:document_file|nullable|string|max:255',
        ]);

        $fileType = (int) $request->file_type;

        // Jika yang diupdate adalah link katalog
        if ($fileType === 17) {
            try {
                $pengajuan->update(['link_e_katalog' => $request->link_katalog]);
                return back()->with('success', 'Link e-Katalog berhasil diperbarui!');
            } catch (\Throwable $t) {
                return back()->with('error', $t->getMessage());
            }
        }

        // Mapping tipe dokumen ke field dan folder
        $map = [
            1 => ['field' => 'surat_permohonan_kerjasama', 'folder' => 'pengajuan/surat_kerjasama'],
            2 => ['field' => 'akta_pendirian_dan_perubahan', 'folder' => 'pengajuan/akta_pendirian'],
            3 => ['field' => 'bukti_pengesahan', 'folder' => 'pengajuan/bukti_pengesahan'],
            4 => ['field' => 'nib_siup_situ', 'folder' => 'pengajuan/nib_siup_situ'],
            5 => ['field' => 'sk_domisili_perusahaan', 'folder' => 'pengajuan/sk_domisili_perusahaan'],
            6 => ['field' => 'npwp_perusahaan', 'folder' => 'pengajuan/npwp_perusahaan'],
            7 => ['field' => 'spt_terakhir', 'folder' => 'pengajuan/spt'],
            8 => ['field' => 'daftar_harga', 'folder' => 'pengajuan/harga'],
            9 => ['field' => 'referend_dan_rekening_bank', 'folder' => 'pengajuan/referend_rekening'],
            10 => ['field' => 'surat_tugas', 'folder' => 'pengajuan/surat_tugas'],
            11 => ['field' => 'kartu_pers', 'folder' => 'pengajuan/kartu_pers'],
            12 => ['field' => 'surat_pernyataan_penanggungjawab', 'folder' => 'pengajuan/surat_penanggungjawab'],
            13 => ['field' => 'surat_kuasa', 'folder' => 'pengajuan/surat_kuasa'],
            14 => ['field' => 'sertifikat_verif_dewan_pers', 'folder' => 'pengajuan/sertifikat_pers'],
            15 => ['field' => 'surat_pernyataan_kebenaran', 'folder' => 'pengajuan/surat_kebenaran'],
            16 => ['field' => 'sertifikat_ukw', 'folder' => 'pengajuan/sertifikat_ukw'],
        ];

        if (!isset($map[$fileType])) {
            return back()->with('error', 'Tipe dokumen tidak valid.');
        }

        $field = $map[$fileType]['field'];
        $folder = $map[$fileType]['folder'];
        $file = $request->file('document_file');
        $nama_dokumen = Str::random(40) . '.' . $file->getClientOriginalExtension();
        $oldFilePath = public_path("{$folder}/" . $pengajuan->{$field});

        try {
            // Hapus file lama jika ada
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }

            // Simpan file baru
            $file->move($folder, $nama_dokumen);

            // Update database
            $pengajuan->update([$field => $nama_dokumen]);

            return back()->with('success', 'Dokumen berhasil diperbarui!');
        } catch (\Throwable $t) {
            return back()->with('error', $t->getMessage());
        }
    }
}
