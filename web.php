<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CakeController;

Route::get('/', [CakeController::class, 'home'])->name('home');
Route::get('/about', [CakeController::class, 'about'])->name('about');
Route::get('/menu', [CakeController::class, 'menu'])->name('menu');
Route::get('/gallery', [CakeController::class, 'gallery'])->name('gallery');
Route::get('/contact', [CakeController::class, 'contact'])->name('contact');
Route::view('/pesan', 'pesan');
use Illuminate\Http\Request;

Route::view('/pesan', 'pesan')->name('pesan');

Route::post('/pesan', function (Request $request) {
    // validasi sederhana
    $request->validate([
        'nama' => 'required',
        'wa' => 'required',
        'produk' => 'required',
        'tanggal' => 'required',
    ]);

    // logika simpan ke database bisa ditambahkan di sini jika perlu

    // redirect ke home dengan notifikasi
    return redirect('/')
        ->with('success', 'Pesanan Anda telah dikirim 🎉 Terima kasih telah mempercayai Cake Étoile!');
});
