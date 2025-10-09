<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SuratRequestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InfografisController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/profil', [HomeController::class,'profil'])->name('profil');

Route::get('/berita', [BeritaController::class,'index'])->name('berita.index');
Route::get('/berita/{berita:slug}', [BeritaController::class,'show'])->name('berita.show');

// Infografis & FAQ (publik)
Route::get('/infografis', [InfografisController::class,'index'])->name('infografis.index');
Route::get('/faq', [FaqController::class,'index'])->name('faq.index');

// Layanan surat online
Route::get('/layanan-surat', [SuratRequestController::class,'create'])->name('surat.create');
Route::post('/layanan-surat', [SuratRequestController::class,'store'])->name('surat.store');
Route::get('/layanan-surat/terima-kasih', [SuratRequestController::class,'thanks'])->name('surat.thanks');

// Kontak
Route::post('/kontak', [ContactController::class,'store'])->name('contact.store');

// Pegawai profil (publik)
Route::get('/pegawai', [PegawaiController::class,'index'])->name('pegawai.index');
Route::get('/pegawai/{pegawai}', [PegawaiController::class,'show'])->name('pegawai.show');

// Admin routes (opsional) - gunakan middleware auth/admin pada real app
// Route::resource('admin/berita', Admin\BeritaController::class);


Route::prefix('admin')->middleware(['auth','is_admin'])->group(function(){
    Route::resource('berita', \App\Http\Controllers\Admin\BeritaController::class);
    Route::resource('pegawai', \App\Http\Controllers\Admin\PegawaiController::class);
    Route::resource('infografis', \App\Http\Controllers\Admin\InfografisController::class);
    Route::resource('faq', \App\Http\Controllers\Admin\FaqController::class);
    Route::get('surat-requests','SuratRequestAdminController@index')->name('admin.surat.index');
    Route::get('contacts','ContactAdminController@index')->name('admin.contacts.index');
});
