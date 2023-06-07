<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeController;
use App\Http\Controllers\AdmController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KategoriController;

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

Route::get('/', [FeController::class, 'index'])->name('user.index');
Route::get('/cars', [FeController::class, 'cars'])->name('user.cars');
Route::get('/about', [FeController::class, 'about'])->name('user.about');
Route::get('/contactus', [FeController::class, 'contactus'])->name('user.contactus');
Route::get('/details/{id}', [FeController::class, 'details'])->name('user.details');

// Admin
Route::get('/admin', [AdmController::class, 'index'])->name('adm.index');
Route::get('/produk', [ProdukController::class, 'index'])->name('adm.produk');
Route::get('/kategori', [KategoriController::class, 'index'])->name('adm.kategori');
Route::get('/pelanggan', [AdmController::class, 'pelanggan'])->name('adm.pelanggan');
Route::get('/contact', [ContactController::class, 'index'])->name('adm.contact');



//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
