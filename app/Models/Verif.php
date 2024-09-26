<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verif extends Model
{
    use HasFactory;
    protected $fillable = [
        'pengajuan_id',
        'catatan',
        'is_surat_permohonan_kerjasama',
        'is_akta_pendirian_dan_perubahan',
        'is_bukti_pengesahan',
        'is_nib_siup_situ',
        'is_sk_domisili_perusahaan',
        'is_npwp_perusahaan',
        'is_spt_terakhir',
        'is_daftar_harga',
        'is_referend_dan_rekening_bank',
        'is_surat_tugas',
        'is_kartu_pers',
        'is_surat_pernyataan_penanggungjawab',
        'is_surat_kuasa',
        'is_sertifikat_verif_dewan_pers',
        'is_surat_pernyataan_kebenaran',
        'is_link_e_katalog',
        'is_surat_pernyataan_media_cetak',
        'is_surat_pernyataan_jumlah_oplah',
        'is_izin_siaran_media_elektronik',
        'is_surat_pernyataan_media_elektronik',
        'is_screenshoot_perusahaan_media_siber',
        'is_surat_pernyataan_media_siber',
        'is_screenshoot_data_pengunjung_web',
    ];
}
