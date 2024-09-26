<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\VerifController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {

    Route::get('/approve', [DashboardController::class, 'approval'])->name('approval');

    Route::middleware(['account_status:active'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'ViewDashboard')->name('view-dashboard');
        });

        Route::controller(DokumenController::class)->group(function () {
            Route::get('/surat_kerjasama/{surat_kerjasama}', 'surat_kerjasama')->name('surat.kerjasama');
            Route::get('/akta_pendirian/{akta_pendirian}', 'akta_pendirian')->name('akta.pendirian');
            Route::get('/bukti_pengesahan/{bukti_pengesahan}', 'bukti_pengesahan')->name('bukti.pengesahan');
            Route::get('/nib_siup_situ/{nib_siup_situ}', 'nib_siup_situ')->name('nib.siup.situ');
            Route::get('/sk_domisili_perusahaan/{sk_domisili_perusahaan}', 'sk_domisili_perusahaan')->name('sk.domisili.perusahaan');
            Route::get('/npwp_perusahaan/{npwp_perusahaan}', 'npwp_perusahaan')->name('npwp.perusahaan');
            Route::get('/spt/{spt}', 'spt')->name('spt');
            Route::get('/harga/{harga}', 'harga')->name('harga');
            Route::get('/referend_rekening/{referend_rekening}', 'referend_rekening')->name('referend.rekening');
            Route::get('/surat_tugas/{surat_tugas}', 'surat_tugas')->name('surat.tugas');
            Route::get('/kartu_pers/{kartu_pers}', 'kartu_pers')->name('kartu.pers');
            Route::get('/surat_penanggungjawab/{surat_penanggungjawab}', 'surat_penanggungjawab')->name('surat.penanggungjawab');
            Route::get('/surat_kuasa/{surat_kuasa}', 'surat_kuasa')->name('surat.kuasa');
            Route::get('/sertifikat_pers/{sertifikat_pers}', 'sertifikat_pers')->name('sertifikat.pers');
            Route::get('/surat_kebenaran/{surat_kebenaran}', 'surat_kebenaran')->name('surat.kebenaran');
            // MEDIA CETAK
            Route::get('/pernyataan_media_cetak/{pernyataan_media_cetak}', 'pernyataan_media_cetak')->name('pernyataan.media.cetak');
            Route::get('/pernyataan_oplah/{pernyataan_oplah}', 'pernyataan_oplah')->name('pernyataan.oplah');
            // MEDIA ELEKTRONIK
            Route::get('/surat_izin/{surat_izin}', 'surat_izin')->name('surat.izin');
            Route::get('/pernyataan_media_elektronik/{pernyataan_media_elektronik}', 'pernyataan_media_elektronik')->name('pernyataan.media.elektronik');
            // MEDIA SIBER
            Route::get('/pernyataan_media_siber/{pernyataan_media_siber}', 'pernyataan_media_siber')->name('pernyataan.media.siber');
            Route::get('/screenshoot_web/{screenshoot_web}', 'screenshoot_web')->name('screenshoot.web');
            Route::get('/screenshoot_data_pengunjung/{screenshoot_data_pengunjung}', 'screenshoot_data_pengunjung')->name('screenshoot.data.pengunjung');
        });

        Route::controller(PengajuanController::class)->group(function () {
            // DELETE PENGAJUAN
            Route::delete('/pengajuan/delete/{id}', 'delete')->name('delete.pengajuan');
        });

        Route::middleware(['role:user'])->group(function () {
            Route::controller(PengajuanController::class)->group(function () {
                Route::get('/list-pengajuan', 'ViewPengajuan')->name('view-pengajuan');
                Route::get('/pengajuan-form', 'ViewFormPengajuan')->name('view-form-pengajuan');
                Route::post('/pengajuan-form', 'UploadPengajuan')->name('upload-pengajuan');
                Route::get('/pengajuan/{id}', 'LihatPengajuan')->name('lihat-pengajuan');
            });
        });
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::controller(AkunController::class)->group(function () {
            Route::get('/approval-account', 'ViewApprovalAkun')->name('view-approval-akun');
            Route::put('/active-account/{id}', 'ActiveAccount')->name('proses-active-akun');
        });
        Route::controller(VerifController::class)->group(function () {
            Route::get('/list-verif-pengajuan', 'ListVerifPengajuan')->name('list.verif.pengajuan');
            Route::get('/detail-verif-pengajuan/{id}', 'DetailPengajuan')->name('detail.verif.pengajuan');
            Route::put('/approved-pengajuan/{id}', 'ApprovedPengajuan')->name('approved.pengajuan');
            Route::put('/reject-pengajuan/{id}', 'RejectPengajuan')->name('reject.pengajuan');
        });
    });
});
