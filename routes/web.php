<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [MahasiswaController::class, 'index'])->name('about');

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'nama' => 'Yola Octaviano Lukito',
            'nim'  => '20230140038',
            'kelas'=> 'C'
        ]);
    })->name('dashboard');

    Route::get('/about', function () {
        return view('about', [
            'nama' => 'Yola Octaviano Lukito',
            'nim'  => '20230140038',
            'prodi'=> 'Teknologi Informasi',
            'hobi' => 'Coding & Gaming'
        ]);
    })->name('about');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';