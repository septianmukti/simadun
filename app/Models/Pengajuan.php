<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_jenis_perusahaan',
        'surat_permohonan_kerjasama',
        'akta_pendirian_dan_perubahan',
        'bukti_pengesahan',
        'nib_siup_situ',
        'sk_domisili_perusahaan',
        'npwp_perusahaan',
        'spt_terakhir',
        'daftar_harga',
        'referend_dan_rekening_bank',
        'surat_tugas',
        'kartu_pers',
        'surat_pernyataan_penanggungjawab',
        'surat_kuasa',
        'sertifikat_verif_dewan_pers',
        'surat_pernyataan_kebenaran',
        'link_e_katalog',
        'surat_pernyataan_media_cetak',
        'surat_pernyataan_jumlah_oplah',
        'izin_siaran_media_elektronik',
        'surat_pernyataan_media_elektronik',
        'screenshoot_perusahaan_media_siber',
        'surat_pernyataan_media_siber',
        'screenshoot_data_pengunjung_web',
        'status',
    ];

    public function users() {
        return $this->HasMany(User::class);
    }
}
