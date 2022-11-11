<?php
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/]', function () {
    return view('welcome');
});

Route::get('/achievement', function () {
    return view('achievement');
});

Route::get('/experience', function () {
    return view('experience');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home1', function () {
    return view('home1');
});

Route::get('/inner-page', function () {
    return view('inner-page');
});

Route::get('/lihat-krs', function () {
    return view('lihat-krs');
});

Route::get('/lihat-krsganjil', function () {
    return view('lihat-krsganjil');
});

Route::get('/portfolio-details', function () {
    return view('portfolio-details');
});

Route::get('/mahasiswa', function () {
    return view('index');
});


Route:: controller(mahasiswaController::class)->group(function (){
    Route::get('/mahasiswa', 'index');
    Route::get('/mahasiswa/{id}', 'show');
    Route::post('/mahasiswa', 'store');
    Route::get('/mahasiswa/new', 'create');
    Route::delete('/mahasiswa/{id}', 'destroy');
    Route::get('/mahasiswa/{id}', 'edit');
    Route::put('/mahasiswa/{id}', 'update');
});
Auth::routes();

Route::get('/laporan/mahasiswa', [LaporanController::class,'index']);
Route::get('/laporan/mahasiswapdf', [LaporanController::class,'cetak_pdf']);
Route::resource('/admin/mahasiswa','App\Http\Controllers\Admin\mahasiswaController');
Route::resource('/admin/dosen','App\Http\Controllers\Admin\dosenController');
Route::resource('/admin/matakuliah','App\Http\Controllers\Admin\matakuliahController');