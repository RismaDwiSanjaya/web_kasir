<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\SesiController;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('layouts.dashboard'); // arahkan ke view yang sesuai
})->name('dashboard')->middleware('auth');

Route::middleware(['guest'])->group(function() {
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);

});

Route::get('home', function (){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'admin'])
    ->middleware('userAkses:admin')
    ->name('admin.dashboard');
    Route::get('/petugas',[AdminController::class,'petugas'])->middleware('userAkses:petugas');
    Route::get('/pimpinan',[AdminController::class,'pimpinan'])->middleware('userAkses:pimpinan');
    Route::get('/logout',[SesiController::class,'logout'])->name('logout');


    // Petugas CRUD routes
    Route::get('/petugas',[PetugasController::class,'index'])->name('petugas.index');
    Route::get('/petugas/create', [PetugasController::class, 'create'])->name('petugas.create');
    Route::get('/petugas/{id}', [PetugasController::class, 'show'])->name('petugas.show');
    Route::post('/petugas', [PetugasController::class, 'store'])->name('petugas.store');
    Route::get('/petugas/{id}/edit', [PetugasController::class, 'edit'])->name('petugas.edit');
    Route::put('/petugas/{id}', [PetugasController::class, 'update'])->name('petugas.update');
    Route::delete('/petugas/{id}', [PetugasController::class, 'destroy'])->name('petugas.destroy');


Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');


Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index'); // Menampilkan daftar transaksi
Route::get('transaksi/create', [TransaksiController::class, 'create'])->name('transaksi.create'); // Menampilkan form untuk membuat transaksi baru
Route::post('transaksi', [TransaksiController::class, 'store'])->name('transaksi.store'); // Menyimpan transaksi baru
Route::get('transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('transaksi.show'); // Menampilkan detail transaksi tertentu
Route::get('transaksi/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksi.edit'); // Menampilkan form untuk mengedit transaksi
Route::put('transaksi/{transaksi}', [TransaksiController::class, 'update'])->name('transaksi.update'); // Memperbarui transaksi tertentu
Route::delete('transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksi.destroy'); // Menghapus transaksi tertentu





    // Menampilkan semua data (index)
    Route::get('payment_methods', [PaymentMethodController::class, 'index'])->name('payment_methods.index');
    // Menampilkan form untuk membuat data baru (create)
    Route::get('payment_methods/create', [PaymentMethodController::class, 'create'])->name('payment_methods.create');
    // Menyimpan data baru (store)
    Route::post('payment_methods', [PaymentMethodController::class, 'store'])->name('payment_methods.store');
    // Menampilkan form untuk mengedit data (edit)
    Route::get('payment_methods/{paymentMethod}/edit', [PaymentMethodController::class, 'edit'])->name('payment_methods.edit');
    // Memperbarui data (update)
    Route::put('payment_methods/{paymentMethod}', [PaymentMethodController::class, 'update'])->name('payment_methods.update');
    // Menghapus data (destroy)
    Route::delete('payment_methods/{paymentMethod}', [PaymentMethodController::class, 'destroy'])->name('payment_methods.destroy');
    

    
});