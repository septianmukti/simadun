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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_jenis_perusahaan');
            $table->string('surat_permohonan_kerjasama');
            $table->string('akta_pendirian_dan_perubahan');
            $table->string('bukti_pengesahan');
            $table->string('nib_siup_situ');
            $table->string('sk_domisili_perusahaan');
            $table->string('npwp_perusahaan');
            $table->string('spt_terakhir');
            $table->string('daftar_harga');
            $table->string('referend_dan_rekening_bank');
            $table->string('surat_tugas');
            $table->string('kartu_pers');
            $table->string('surat_pernyataan_penanggungjawab');
            $table->string('surat_kuasa');
            $table->string('sertifikat_verif_dewan_pers');
            $table->string('surat_pernyataan_kebenaran');
            $table->string('link_e_katalog');
            $table->string('surat_pernyataan_media_cetak')->nullable();
            $table->string('surat_pernyataan_jumlah_oplah')->nullable();
            $table->string('izin_siaran_media_elektronik')->nullable();
            $table->string('surat_pernyataan_media_elektronik')->nullable();
            $table->string('surat_pernyataan_media_siber')->nullable();
            $table->string('screenshoot_perusahaan_media_siber')->nullable();
            $table->string('screenshoot_data_pengunjung_web')->nullable();
            $table->string('status')->default('proses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
