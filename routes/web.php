<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::controller(WebController::class)->group(function () {
    Route::get('/', 'beranda')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/data-media', 'DataMedia')->name('media.list');
    Route::get('/syarat-ketentuan', 'term')->name('syarat.ketentuan');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'hsts'])->group(function () {

    Route::get('/approve', [DashboardController::class, 'approval'])->name('approval');

    Route::middleware(['account_status:active'])->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'ViewDashboard')->name('view-dashboard');
        });

        // DOWNLOAD FILE
        Route::controller(DokumenController::class)->group(function () {
            Route::get('download/{folder}/{filename}', 'downloadFile')->name('download.file');
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
                Route::post('/update-pengajuan', 'UpdatePengajuan')->name('update-pengajuan');
            });
        });
    });

    Route::middleware(['role:admin'])->group(function () {
        Route::controller(AkunController::class)->group(function () {
            Route::get('/approval-account', 'ViewApprovalAkun')->name('view-approval-akun');
            Route::get('/active-account', 'ViewAktifAkun')->name('view-aktif-akun');
            Route::delete('/approval-account/delete/{id}', 'DeleteApprovalAkun')->name('delete.approval.akun');
            Route::delete('/active-account/delete/{id}', 'DeleteAktifAkun')->name('delete.aktif.akun');
            Route::post('/active-account/{id}', 'ActiveAccount')->name('proses-active-akun');
        });
        Route::controller(VerifController::class)->group(function () {
            Route::get('/list-verif-pengajuan', 'ListVerifPengajuan')->name('list.verif.pengajuan');
            Route::get('/detail-verif-pengajuan/{id}', 'DetailPengajuan')->name('detail.verif.pengajuan');
            Route::put('/simpan-pengajuan/{id}', 'SimpanPengajuan')->name('simpan.pengajuan');
        });
    });
});
