<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('verif_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('pengajuan_id');
            $table->string('catatan')->nullable();
            $table->string('is_surat_permohonan_kerjasama')->nullable();
            $table->string('is_akta_pendirian_dan_perubahan')->nullable();
            $table->string('is_bukti_pengesahan')->nullable();
            $table->string('is_nib_siup_situ')->nullable();
            $table->string('is_sk_domisili_perusahaan')->nullable();
            $table->string('is_npwp_perusahaan')->nullable();
            $table->string('is_spt_terakhir')->nullable();
            $table->string('is_daftar_harga')->nullable();
            $table->string('is_referend_dan_rekening_bank')->nullable();
            $table->string('is_surat_tugas')->nullable();
            $table->string('is_kartu_pers')->nullable();
            $table->string('is_surat_pernyataan_penanggungjawab')->nullable();
            $table->string('is_surat_kuasa')->nullable();
            $table->string('is_sertifikat_verif_dewan_pers')->nullable();
            $table->string('is_surat_pernyataan_kebenaran')->nullable();
            $table->string('is_link_e_katalog')->nullable();
            $table->string('is_surat_pernyataan_media_cetak')->nullable();
            $table->string('is_surat_pernyataan_jumlah_oplah')->nullable();
            $table->string('is_izin_siaran_media_elektronik')->nullable();
            $table->string('is_surat_pernyataan_media_elektronik')->nullable();
            $table->string('is_surat_pernyataan_media_siber')->nullable();
            $table->string('is_screenshoot_perusahaan_media_siber')->nullable();
            $table->string('is_screenshoot_data_pengunjung_web')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verif_pengajuans');
    }
};
