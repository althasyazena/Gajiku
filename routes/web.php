<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Kelola Karyawan
Route::middleware('auth')->controller(EmployeeController::class)->group(function() {
    Route::get('karyawan/index', 'index')->name('karyawan.index'); // untuk menampilkan data
    Route::get('karyawan/create', 'create')->name('karyawan.create'); // menampilan form tambah data
    Route::post('karyawan/store', 'store')->name('karyawan.store'); // untuk menyimpan data baru
    Route::get('karyawan/edit/{id}', 'edit')->name('karyawan.edit'); // menampilkan form edit data
    Route::put('/karyawan/update/{id}', 'update')->name('karyawan.update'); // menyimpan perubahan data
    Route::delete('/karyawan/delete/{id}', 'destroy')->name('karyawan.destroy'); // untuk menghapus data karyawan
});

Route::middleware('auth')->controller(SalaryController::class)->group(function() {
    Route::get('/gaji/index', 'index')->name('gaji.index');
    Route::get('/gaji/create/{employeeId}', 'create')->name('gaji.create');
    Route::post('/gaji/store/', 'store')->name('gaji.store');
    Route::get('/gaji/show/{id}', 'show')->name('gaji.show');
    Route::get('/gaji/download/{id}', 'download')->name('gaji.download');
    Route::delete('/gaji/delete/{id}', 'delete')->name('gaji.delete');
});

require __DIR__.'/auth.php';
