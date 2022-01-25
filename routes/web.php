<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\DataLpseController;
use App\Http\Controllers\DataMagangController;
use App\Http\Controllers\DataTamuController;
use App\Http\Controllers\SkpdController;
use App\Http\Controllers\BidangController;

use App\Http\Controllers\DispensasiNikahController;
use App\Http\Controllers\SuratRekomendasiController;
use App\Http\Controllers\UsulanDataController;
use App\Http\Controllers\LaporanKependudukanController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
// Route::group(['middleware' => 'is_admin'], function () { 
//     Route::get('admin/suratkeluar', [SuratKeluarController  ::class, 'index'])->name('admin.suratkeluar');
//     Route::get('admin/suratkeluar/create', [SuratKeluarController  ::class, 'create'])->name('admin.suratkeluar.create');
//     Route::post('admin/suratkeluar/', [SuratKeluarController  ::class, 'store'])->name('admin.suratkeluar.store');
//     Route::get('admin/suratkeluar/edit', [SuratKeluarController  ::class, 'edit'])->name('admin.suratkeluar.edit');
//     Route::post('admin/suratkeluar/edit/{id}', [SuratKeluarController::class, 'edit']);
//     Route::get('admin/suratkeluar/hapus/{id}', [SuratKeluarController::class, 'destroy']);
// });

Route::group(['middleware' => ['auth','is_admin:1']],function(){
// Bidang
Route::get('admin/bidang', [BidangController::class, 'index'])->name('admin.bidang.index'); 
Route::get('admin/bidang/create', [BidangController::class, 'create'])->name('admin.bidang.create'); 
Route::post('admin/bidang', [BidangController::class, 'store'])->name('admin.bidang.store');
Route::get('admin/bidang/edit/{id}', [BidangController  ::class, 'edit'])->name('admin.bidang.edit');
Route::get('admin/bidang/hapus/{id}', [BidangController  ::class, 'destroy'])->name('admin.bidang.hapus');
Route::get('admin/bidang/laporan', [BidangController  ::class, 'laporan'])->name('admin.bidang.laporan');
Route::get('admin/bidang/cetak-pertanggal/{tglawal}/{tglakhir}', [BidangController  ::class, 'cetakBidangPertanggal'])->name('admin.bidang.laporanpertanggal');

//Surat keluar
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('admin/suratkeluar', [SuratKeluarController  ::class, 'index'])->name('admin.suratkeluar');
Route::get('admin/suratkeluar/create', [SuratKeluarController  ::class, 'create'])->name('admin.suratkeluar.create');
Route::post('admin/suratkeluar/', [SuratKeluarController  ::class, 'store'])->name('admin.suratkeluar.store');
Route::get('admin/suratkeluar/edit', [SuratKeluarController  ::class, 'edit'])->name('admin.suratkeluar.edit');
Route::post('admin/suratkeluar/download/{suratkeluar}', [SuratKeluarController  ::class, 'download'])->name('admin.suratkeluar.download'); 
Route::get('admin/suratkeluar/cetakpdf', [SuratKeluarController  ::class, 'cetakpdf'])->name('admin.suratkeluar.cetakpdf');
Route::get('admin/suratkeluar/laporan', [SuratKeluarController  ::class, 'laporan'])->name('admin.suratkeluar.laporan');
});
 
//surat Masuk
Route::get('admin/suratmasuk', [SuratMasukController::class, 'index'])->name('admin.suratmasuk'); 
Route::get('admin/suratmasuk/create', [SuratMasukController  ::class, 'create'])->name('admin.suratmasuk.create');
Route::post('admin/suratmasuk/', [SuratMasukController  ::class, 'store'])->name('admin.suratmasuk.store');
Route::get('admin/suratmasuk/edit/{id}', [SuratMasukController  ::class, 'edit'])->name('admin.suratmasuk.edit');
Route::delete('admin/suratmasuk/destroy/{id}', [SuratMasukController  ::class, 'destroy'])->name('admin.suratmasuk.destroy');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/suratmasuk/cetakpdf', [SuratMasukController  ::class, 'cetakpdf'])->name('admin.suratmasuk.cetakpdf');
Route::get('admin/suratmasuk/laporan', [SuratMasukController  ::class, 'laporan'])->name('admin.suratmasuk.laporan');
Route::get('admin/suratmasuk/cetak-pertanggal/{tglawal}/{tglakhir}', [SuratMasukController  ::class, 'cetaksuratmasukPertanggal'])->name('admin.suratmasuk.laporanpertanggal');
// Route::resource('admin/suratmasuk', SuratMasukController::class);

//surat Rekomendasi
Route::get('admin/suratrekomendasi', [SuratRekomendasiController::class, 'index'])->name('admin.suratrekomendasi'); 
Route::get('admin/suratrekomendasi/create', [SuratRekomendasiController  ::class, 'create'])->name('admin.suratrekomendasi.create');
Route::post('admin/suratrekomendasi/', [SuratRekomendasiController  ::class, 'store'])->name('admin.suratrekomendasi.store');
Route::get('admin/suratrekomendasi/edit/{id}', [SuratRekomendasiController  ::class, 'edit'])->name('admin.suratrekomendasi.edit');
Route::delete('admin/suratrekomendasi/destroy/{id}', [SuratRekomendasiController  ::class, 'destroy'])->name('admin.suratrekomendasi.destroy');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/suratrekomendasi/cetakpdf', [SuratRekomendasiController  ::class, 'cetakpdf'])->name('admin.suratrekomendasi.cetakpdf');
Route::get('admin/suratrekomendasi/laporan', [SuratRekomendasiController  ::class, 'laporan'])->name('admin.suratrekomendasi.laporan');
Route::get('admin/suratrekomendasi/cetak-pertanggal/{tglawal}/{tglakhir}', [SuratRekomendasiController  ::class, 'cetaksuratrekomendasiPertanggal'])->name('admin.suratrekomendasi.laporanpertanggal');

//surat Usulan Data Pelaku
Route::get('admin/usulandata', [UsulanDataController::class, 'index'])->name('admin.usulandata'); 
Route::get('admin/usulandata/create', [UsulanDataController  ::class, 'create'])->name('admin.usulandata.create');
Route::post('admin/usulandata/', [UsulanDataController  ::class, 'store'])->name('admin.usulandata.store');
Route::get('admin/usulandata/edit/{id}', [UsulanDataController  ::class, 'edit'])->name('admin.usulandata.edit');
Route::delete('admin/usulandata/destroy/{id}', [UsulanDataController  ::class, 'destroy'])->name('admin.usulandata.destroy');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/usulandata/cetakpdf', [UsulanDataController  ::class, 'cetakpdf'])->name('admin.usulandata.cetakpdf');
Route::get('admin/usulandata/laporan', [UsulanDataController  ::class, 'laporan'])->name('admin.usulandata.laporan');
Route::get('admin/usulandata/laporan', [UsulanDataController  ::class, 'laporan'])->name('admin.usulandata.laporan');

//surat Lap Kependudukan
Route::get('admin/lapkependudukan', [LaporanKependudukanController::class, 'index'])->name('admin.lapkependudukan'); 
Route::get('admin/lapkependudukan/create', [LaporanKependudukanController  ::class, 'create'])->name('admin.lapkependudukan.create');
Route::post('admin/lapkependudukan/', [LaporanKependudukanController  ::class, 'store'])->name('admin.lapkependudukan.store');
Route::get('admin/lapkependudukan/edit/{id}', [LaporanKependudukanController  ::class, 'edit'])->name('admin.lapkependudukan.edit');
Route::delete('admin/lapkependudukan/destroy/{id}', [LaporanKependudukanController  ::class, 'destroy'])->name('admin.lapkependudukan.destroy');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/lapkependudukan/cetakpdf', [LaporanKependudukanController  ::class, 'cetakpdf'])->name('admin.lapkependudukan.cetakpdf');
Route::get('admin/lapkependudukan/laporan', [LaporanKependudukanController  ::class, 'laporan'])->name('admin.lapkependudukan.laporan');
Route::get('admin/lapkependudukan/cetak-pertanggal/{tglawal}/{tglakhir}', [LaporanKependudukanController  ::class, 'cetaklapkependudukanPertanggal'])->name('admin.lapkependudukan.laporanpertanggal');

//surat Dispensasi Nikah
Route::get('admin/dispensasinikah', [DispensasiNikahController::class, 'index'])->name('admin.dispensasinikah'); 
Route::get('admin/dispensasinikah/create', [DispensasiNikahController  ::class, 'create'])->name('admin.dispensasinikah.create');
Route::post('admin/dispensasinikah/', [DispensasiNikahController  ::class, 'store'])->name('admin.dispensasinikah.store');
Route::get('admin/dispensasinikah/edit/{id}', [DispensasiNikahController  ::class, 'edit'])->name('admin.dispensasinikah.edit');
Route::delete('admin/dispensasinikah/destroy/{id}', [DispensasiNikahController  ::class, 'destroy'])->name('admin.dispensasinikah.destroy');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/dispensasinikah/cetakpdf', [DispensasiNikahController  ::class, 'cetakpdf'])->name('admin.dispensasinikah.cetakpdf');
Route::get('admin/dispensasinikah/laporan', [DispensasiNikahController  ::class, 'laporan'])->name('admin.dispensasinikah.laporan');
Route::get('admin/dispensasinikah/cetak-pertanggal/{tglawal}/{tglakhir}', [DispensasiNikahController  ::class, 'cetakdispensasinikahPertanggal'])->name('admin.dispensasinikah.laporanpertanggal');

// Data Tamu 
Route::get('admin/datatamu', [DataTamuController::class, 'index'])->name('admin.datatamu'); 
Route::get('admin/datatamu/create', [DataTamuController  ::class, 'create'])->name('admin.datatamu.create');
Route::post('admin/datatamu/', [DataTamuController  ::class, 'store'])->name('admin.datatamu.store');
Route::get('admin/datatamu/edit/{id}', [DataTamuController  ::class, 'edit'])->name('admin.datatamu.edit');
Route::delete('admin/datatamu/hapus/{id}', [DataTamuController  ::class, 'hapus'])->name('admin.datatamu.hapus');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/datatamu/cetakpdf', [DataTamuController  ::class, 'cetakpdf'])->name('admin.datatamu.cetakpdf');
  
// Data Magang 
Route::get('admin/datamagang', [DataMagangController::class, 'index'])->name('admin.datamagang'); 
Route::get('admin/datamagang/create', [DataMagangController  ::class, 'create'])->name('admin.datamagang.create');
Route::post('admin/datamagang/', [DataMagangController  ::class, 'store'])->name('admin.datamagang.store');
Route::get('admin/datamagang/edit/{id}', [DataMagangController  ::class, 'edit'])->name('admin.datamagang.edit');
Route::delete('admin/datamagang/hapus/{id}', [DataMagangController  ::class, 'hapus'])->name('admin.datamagang.hapus');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/datamagang/cetakpdf', [DataMagangController  ::class, 'cetakpdf'])->name('admin.datamagang.cetakpdf');

//Data LPSE 
Route::get('admin/datalpse', [DataLpseController::class, 'index'])->name('admin.datalpse'); 
Route::get('admin/datalpse/create', [DataLpseController  ::class, 'create'])->name('admin.datalpse.create');
Route::post('admin/datalpse/', [DataLpseController  ::class, 'store'])->name('admin.datalpse.store');
Route::get('admin/datalpse/edit/{id}', [DataLpseController  ::class, 'edit'])->name('admin.datalpse.edit');
Route::delete('admin/datalpse/hapus/{id}', [DataLpseController  ::class, 'hapus'])->name('admin.datalpse.hapus');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/datalpse/cetakpdf', [DataLpseController  ::class, 'cetakpdf'])->name('admin.datalpse.cetakpdf');

//Data SKPD 
Route::get('admin/skpd', [SkpdController::class, 'index'])->name('admin.skpd'); 
Route::get('admin/skpd/create', [SkpdController  ::class, 'create'])->name('admin.skpd.create');
Route::post('admin/skpd/', [SkpdController  ::class, 'store'])->name('admin.skpd.store');
Route::get('admin/skpd/edit/{id}', [SkpdController  ::class, 'edit'])->name('admin.skpd.edit');
Route::get('admin/skpd/hapus/{id}', [SkpdController  ::class, 'hapus'])->name('admin.skpd.hapus');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('admin/skpd/cetakpdf', [SkpdController  ::class, 'cetakpdf'])->name('admin.skpd.cetakpdf');

