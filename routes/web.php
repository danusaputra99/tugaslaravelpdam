<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BillController;
use App\Http\controllers\TagihanController;

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
    return view ('welcome');
});

Route::get('/form-action', function() {
    return view('form-action');

});



Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
Route::post('/bills/calculate', [BillController::class, 'calculate'])->name('bills.calculate');

// routes/web.php
Route::get('/tagihan', [TagihanController::class, 'index']);
Route::post('/tagihan', [TagihanController::class, 'hitungTagihan']);

Route::get('halaman',[Home ::class,'halaman'])->name('halaman');
Route::get('user',[User::class,'user'])->name('user');
Route::get('Produk',[ProdukController::class,'Produk'])->name('Produk');
Route::get('cet_plat',[ProdukController::class,'cet_plat'])->name('cet_plat');
Route::get('form_angka',[ProdukController::class,'form_angka'])->name('form_angka');
//Route::get('baru',[ProfilController::class,'halaman2'])->name('baru');


