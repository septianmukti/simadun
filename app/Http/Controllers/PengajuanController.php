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
        if (Auth::user()->role == 'user') {
            $request->validate([
                'surat_kerjasama' => 'required|mimes:pdf|max:3072',
                'akta_pendirian' => 'required|mimes:pdf|max:3072',
                'bukti_pengesahan' => 'required|mimes:pdf|max:3072',
                'nib_siup_situ' => 'required|mimes:pdf|max:3072',
                'sk_domisili_perusahaan' => 'required|mimes:pdf|max:3072',
                'npwp_perusahaan' => 'required|mimes:pdf|max:3072',
                'spt' => 'required|mimes:pdf|max:3072',
                'harga' => 'required|mimes:pdf|max:3072',
                'referend_rekening' => 'required|mimes:pdf|max:3072',
                'surat_tugas' => 'required|mimes:pdf|max:3072',
                'kartu_pers' => 'required|mimes:pdf|max:3072',
                'surat_penanggungjawab' => 'required|mimes:pdf|max:3072',
                'surat_kuasa' => 'required|mimes:pdf|max:3072',
                'sertifikat_pers' => 'required|mimes:pdf|max:3072',
                'surat_kebenaran' => 'required|mimes:pdf|max:3072',
                'link_katalog' => ['required', 'string', 'max:255'],
            ]);
            try {
                if ($request->surat_kerjasama != '') {
                    $random = Str::random(40);
                    $file = $request->file('surat_kerjasama');
                    $suratkerjasama = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/surat_kerjasama';
                    $file->move($path, $suratkerjasama);
                }
                if ($request->akta_pendirian != '') {
                    $random = Str::random(40);
                    $file = $request->file('akta_pendirian');
                    $aktapendirian = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/akta_pendirian';
                    $file->move($path, $aktapendirian);
                }
                if ($request->bukti_pengesahan != '') {
                    $random = Str::random(40);
                    $file = $request->file('bukti_pengesahan');
                    $buktipengesahan = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/bukti_pengesahan';
                    $file->move($path, $buktipengesahan);
                }
                if ($request->nib_siup_situ != '') {
                    $random = Str::random(40);
                    $file = $request->file('nib_siup_situ');
                    $nibsiupsitu = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/nib_siup_situ';
                    $file->move($path, $nibsiupsitu);
                }
                if ($request->sk_domisili_perusahaan != '') {
                    $random = Str::random(40);
                    $file = $request->file('sk_domisili_perusahaan');
                    $skdomisiliperusahaan = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/sk_domisili_perusahaan';
                    $file->move($path, $skdomisiliperusahaan);
                }
                if ($request->npwp_perusahaan != '') {
                    $random = Str::random(40);
                    $file = $request->file('npwp_perusahaan');
                    $npwpperusahaan = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/npwp_perusahaan';
                    $file->move($path, $npwpperusahaan);
                }
                if ($request->spt != '') {
                    $random = Str::random(40);
                    $file = $request->file('spt');
                    $spt = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/spt';
                    $file->move($path, $spt);
                }
                if ($request->harga != '') {
                    $random = Str::random(40);
                    $file = $request->file('harga');
                    $harga = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/harga';
                    $file->move($path, $harga);
                }
                if ($request->referend_rekening != '') {
                    $random = Str::random(40);
                    $file = $request->file('referend_rekening');
                    $referendrekening = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/referend_rekening';
                    $file->move($path, $referendrekening);
                }
                if ($request->surat_tugas != '') {
                    $random = Str::random(40);
                    $file = $request->file('surat_tugas');
                    $surattugas = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/surat_tugas';
                    $file->move($path, $surattugas);
                }
                if ($request->kartu_pers != '') {
                    $random = Str::random(40);
                    $file = $request->file('kartu_pers');
                    $kartupers = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/kartu_pers';
                    $file->move($path, $kartupers);
                }
                if ($request->surat_penanggungjawab != '') {
                    $random = Str::random(40);
                    $file = $request->file('surat_penanggungjawab');
                    $suratpenanggungjawab = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/surat_penanggungjawab';
                    $file->move($path, $suratpenanggungjawab);
                }
                if ($request->surat_kuasa != '') {
                    $random = Str::random(40);
                    $file = $request->file('surat_kuasa');
                    $suratkuasa = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/surat_kuasa';
                    $file->move($path, $suratkuasa);
                }
                if ($request->sertifikat_pers != '') {
                    $random = Str::random(40);
                    $file = $request->file('sertifikat_pers');
                    $sertifikatpers = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/sertifikat_pers';
                    $file->move($path, $sertifikatpers);
                }
                if ($request->surat_kebenaran != '') {
                    $random = Str::random(40);
                    $file = $request->file('surat_kebenaran');
                    $suratkebenaran = $random . '.' . $file->getClientOriginalExtension();
                    $path = 'pengajuan/surat_kebenaran';
                    $file->move($path, $suratkebenaran);
                }

                if (Auth::user()->jenis_perusahaan == 'media-cetak') {
                    $request->validate([
                        // media cetak
                        'pernyataan_media_cetak' => 'required|mimes:pdf|max:3072',
                        'pernyataan_oplah' => 'required|mimes:pdf|max:3072',
                    ]);
                    if ($request->pernyataan_media_cetak != '') {
                        $random = Str::random(40);
                        $file = $request->file('pernyataan_media_cetak');
                        $pernyataanmediacetak = $random . '.' . $file->getClientOriginalExtension();
                        $path = 'pengajuan/pernyataan_media_cetak';
                        $file->move($path, $pernyataanmediacetak);
                    }
                    if ($request->pernyataan_oplah != '') {
                        $random = Str::random(40);
                        $file = $request->file('pernyataan_oplah');
                        $pernyataanoplah = $random . '.' . $file->getClientOriginalExtension();
                        $path = 'pengajuan/pernyataan_oplah';
                        $file->move($path, $pernyataanoplah);
                    }
                    Pengajuan::create([
                        'user_id'                           => Auth::user()->id,
                        'user_jenis_perusahaan'             => Auth::user()->jenis_perusahaan,
                        'surat_permohonan_kerjasama'        => $suratkerjasama,
                        'akta_pendirian_dan_perubahan'      => $aktapendirian,
                        'bukti_pengesahan'                  => $buktipengesahan,
                        'nib_siup_situ'                     => $nibsiupsitu,
                        'sk_domisili_perusahaan'            => $skdomisiliperusahaan,
                        'npwp_perusahaan'                   => $npwpperusahaan,
                        'spt_terakhir'                      => $spt,
                        'daftar_harga'                      => $harga,
                        'referend_dan_rekening_bank'        => $referendrekening,
                        'surat_tugas'                       => $surattugas,
                        'kartu_pers'                        => $kartupers,
                        'surat_pernyataan_penanggungjawab'  => $suratpenanggungjawab,
                        'surat_kuasa'                       => $suratkuasa,
                        'sertifikat_verif_dewan_pers'       => $sertifikatpers,
                        'surat_pernyataan_kebenaran'        => $suratkebenaran,
                        'link_e_katalog'                    => $request->link_katalog,
                        'surat_pernyataan_media_cetak'      => $pernyataanmediacetak,
                        'surat_pernyataan_jumlah_oplah'     => $pernyataanoplah,
                        'created_at'                        => Carbon::now(),
                    ]);
                } elseif (Auth::user()->jenis_perusahaan == 'media-elektronik') {
                    $request->validate([
                        // media elektronik
                        'surat_izin' => 'required|mimes:pdf|max:3072',
                        'pernyataan_media_elektronik' => 'required|mimes:pdf|max:3072',
                    ]);
                    if ($request->surat_izin != '') {
                        $random = Str::random(40);
                        $file = $request->file('surat_izin');
                        $path = 'pengajuan/surat_izin';
                        $suratizin = $file->move($path, $random . '.' . $file->getClientOriginalExtension());
                    }
                    if ($request->pernyataan_media_elektronik != '') {
                        $random = Str::random(40);
                        $file = $request->file('pernyataan_media_elektronik');
                        $path = 'pengajuan/pernyataan_media_elektronik';
                        $pernyataanmediaelektronik = $file->move($path, $random . '.' . $file->getClientOriginalExtension());
                    }
                    Pengajuan::create([
                        'user_id'                           => Auth::user()->id,
                        'user_jenis_perusahaan'             => Auth::user()->jenis_perusahaan,
                        'surat_permohonan_kerjasama'        => $suratkerjasama,
                        'akta_pendirian_dan_perubahan'      => $aktapendirian,
                        'bukti_pengesahan'                  => $buktipengesahan,
                        'nib_siup_situ'                     => $nibsiupsitu,
                        'sk_domisili_perusahaan'            => $skdomisiliperusahaan,
                        'npwp_perusahaan'                   => $npwpperusahaan,
                        'spt_terakhir'                      => $spt,
                        'daftar_harga'                      => $harga,
                        'referend_dan_rekening_bank'        => $referendrekening,
                        'surat_tugas'                       => $surattugas,
                        'kartu_pers'                        => $kartupers,
                        'surat_pernyataan_penanggungjawab'  => $suratpenanggungjawab,
                        'surat_kuasa'                       => $suratkuasa,
                        'sertifikat_verif_dewan_pers'       => $sertifikatpers,
                        'surat_pernyataan_kebenaran'        => $suratkebenaran,
                        'link_e_katalog'                    => $request->link_katalog,
                        'izin_siaran_media_elektronik'      => $suratizin,
                        'surat_pernyataan_media_elektronik' => $pernyataanmediaelektronik,
                        'created_at'                        => Carbon::now(),
                    ]);
                } elseif (Auth::user()->jenis_perusahaan == 'media-siber') {
                    $request->validate([
                        // media siber
                        'pernyataan_media_siber' => 'required|mimes:pdf|max:3072',
                        'screenshoot_web' => 'required|mimes:pdf|max:3072',
                        'screenshoot_data_pengunjung' => 'required|mimes:pdf|max:3072',
                    ]);
                    if ($request->pernyataan_media_siber != '') {
                        $random = Str::random(40);
                        $file = $request->file('pernyataan_media_siber');
                        $path = 'pengajuan/pernyataan_media_siber';
                        $pernyataanmediasiber = $file->move($path, $random . '.' . $file->getClientOriginalExtension());
                    }
                    if ($request->screenshoot_web != '') {
                        $random = Str::random(40);
                        $file = $request->file('screenshoot_web');
                        $path = 'pengajuan/screenshoot_web';
                        $screenshootweb = $file->move($path, $random . '.' . $file->getClientOriginalExtension());
                    }
                    if ($request->screenshoot_data_pengunjung != '') {
                        $random = Str::random(40);
                        $file = $request->file('screenshoot_data_pengunjung');
                        $path = 'pengajuan/screenshoot_data_pengunjung';
                        $screenshootdatapengunjung = $file->move($path, $random . '.' . $file->getClientOriginalExtension());
                    }
                    Pengajuan::create([
                        'user_id'                             => Auth::user()->id,
                        'user_jenis_perusahaan'               => Auth::user()->jenis_perusahaan,
                        'surat_permohonan_kerjasama'          => $suratkerjasama,
                        'akta_pendirian_dan_perubahan'        => $aktapendirian,
                        'bukti_pengesahan'                    => $buktipengesahan,
                        'nib_siup_situ'                       => $nibsiupsitu,
                        'sk_domisili_perusahaan'              => $skdomisiliperusahaan,
                        'npwp_perusahaan'                     => $npwpperusahaan,
                        'spt_terakhir'                        => $spt,
                        'daftar_harga'                        => $harga,
                        'referend_dan_rekening_bank'          => $referendrekening,
                        'surat_tugas'                         => $surattugas,
                        'kartu_pers'                          => $kartupers,
                        'surat_pernyataan_penanggungjawab'    => $suratpenanggungjawab,
                        'surat_kuasa'                         => $suratkuasa,
                        'sertifikat_verif_dewan_pers'         => $sertifikatpers,
                        'surat_pernyataan_kebenaran'          => $suratkebenaran,
                        'link_e_katalog'                      => $request->link_katalog,
                        'surat_pernyataan_media_siber'        => $pernyataanmediasiber,
                        'screenshoot_perusahaan_media_siber'  => $screenshootweb,
                        'screenshoot_data_pengunjung_web'     => $screenshootdatapengunjung,
                        'created_at'                          => Carbon::now(),
                    ]);
                }
                return redirect('list-pengajuan')
                    ->with('success', 'Selamat permohonan pengajuan anda telah berhasil dibuat!');
            } catch (\Throwable $t) {
                return redirect()->back()->with('error', $t->getMessage());
            }
        }
    }

    public function LihatPengajuan($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $check = Pengajuan::where('user_id', Auth::id())->first();
        if (!$check) {
            abort(403);
        }
        $pengajuan = Pengajuan::find($id);
        return view('user.detail-pengajuan', ['pengajuan' => $pengajuan]);
    }

    public function delete($id)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $pengajuan = Pengajuan::where('id', $id)->first();
        if (Pengajuan::where('user_jenis_perusahaan' == 'media-cetak')) {
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
                // MEDIA CETAK
                public_path('pengajuan/pernyataan_media_cetak/' . $pengajuan->surat_pernyataan_media_cetak),
                public_path('pengajuan/pernyataan_oplah/' . $pengajuan->surat_pernyataan_jumlah_oplah),
            ];
            foreach ($filesDelete as $file) {
                if (file_exists($file)) {
                    unlink($file);
                } else {
                    return back()->with('error', 'Pengajuan Gagal Dihapus!');
                }
            }
            Pengajuan::where('id', $id)->delete();
            return back()->with('success', 'Pengajuan Berhasil Dihapus');
        } elseif (Pengajuan::where('user_jenis_perusahaan' == 'media-elektronik')) {
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
                // MEDIA ELEKTRONIK
                public_path('pengajuan/surat_izin/' . $pengajuan->izin_siaran_media_elektronik),
                public_path('pengajuan/pernyataan_media_elektronik/' . $pengajuan->surat_pernyataan_media_elektronik),
            ];
            foreach ($filesDelete as $file) {
                if (file_exists($file)) {
                    unlink($file);
                } else {
                    return back()->with('error', 'Pengajuan Gagal Dihapus!');
                }
            }
            Pengajuan::where('id', $id)->delete();
            return back()->with('success', 'Pengajuan Berhasil Dihapus');
        } elseif (Pengajuan::where('user_jenis_perusahaan' == 'media-siber')) {
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
                // MEDIA SIBER
                public_path('pengajuan/pernyataan_media_siber/' . $pengajuan->surat_pernyataan_media_siber),
                public_path('pengajuan/screenshoot_web/' . $pengajuan->screenshoot_perusahaan_media_siber),
                public_path('pengajuan/screenshoot_data_pengunjung/' . $pengajuan->screenshoot_data_pengunjung_web),
            ];
            foreach ($filesDelete as $file) {
                if (file_exists($file)) {
                    unlink($file);
                } else {
                    return back()->with('error', 'Pengajuan Gagal Dihapus!');
                }
            }
            Pengajuan::where('id', $id)->delete();
            return back()->with('success', 'Pengajuan Berhasil Dihapus');
        }
    }
}
