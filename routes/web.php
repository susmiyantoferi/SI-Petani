<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LadangController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LabaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UsersController;


/*Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);

Route::get('users', [UsersController::class, 'index'])->name('users');
Route::get('users/detail/{id_users}', [UsersController::class, 'detail']);
Route::get('users/add', [UsersController::class, 'add']);
Route::post('users/insert', [UsersController::class, 'insert']);
Route::get('users/edit/{id_users}', [UsersController::class, 'edit']);
Route::post('users/update/{id_users}', [UsersController::class, 'update']);
Route::get('users/delete/{id_users}', [UsersController::class, 'delete']);
route::get('/searchUsers', [UsersController::class, 'searchUsers']); //penambhan route pencarian data
Route::get('users/print', [UsersController::class, 'print']); //print printer

Route::get('pengguna', [PenggunaController::class, 'index'])->name('pengguna');
Route::get('pengguna/detail/{id_pengguna}', [PenggunaController::class, 'detail']);
Route::get('pengguna/add', [PenggunaController::class, 'add']);
Route::post('pengguna/insert', [PenggunaController::class, 'insert']);
Route::get('pengguna/edit/{id_pengguna}', [PenggunaController::class, 'edit']);
Route::post('pengguna/update/{id_pengguna}', [PenggunaController::class, 'update']);
Route::get('pengguna/delete/{id_pengguna}', [PenggunaController::class, 'delete']);
Route::get('pengguna/print', [PenggunaController::class, 'print']); //print printer
Route::get('pengguna/penggunaexcel', [PenggunaController::class, 'penggunaexcel']);
route::get('/searchPengguna', [PenggunaController::class, 'searchPengguna']); //penambhan route pencarian data di menu pendapatan

Route::get('laba', [LabaController::class, 'index'])->name('laba');
Route::get('laba/detail/{id_laba}', [LabaController::class, 'detail']);
Route::get('laba/add', [LabaController::class, 'add']);
Route::post('laba/insert', [LabaController::class, 'insert']);
Route::get('laba/edit/{id_laba}', [LabaController::class, 'edit']);
Route::post('laba/update/{id_laba}', [LabaController::class, 'update']);
Route::get('laba/delete/{id_laba}', [LabaController::class, 'delete']);
route::get('/searchLaba', [LabaController::class, 'searchLaba']); //penambhan route pencarian data di menu pendapatan
Route::get('laba/print', [LabaController::class, 'print']); //print printer
Route::get('laba/labaexcel', [LabaController::class, 'labaexcel']); //penambahan fitur export excel


Route::get('ladang', [LadangController::class, 'index'])->name('ladang');
Route::get('ladang/detail/{id_ladang}', [LadangController::class, 'detail']);
Route::get('ladang/add', [LadangController::class, 'add']);
Route::post('ladang/insert', [LadangController::class, 'insert']);
Route::get('ladang/edit/{id_ladang}', [LadangController::class, 'edit']);
Route::post('ladang/update/{id_ladang}', [LadangController::class, 'update']);
Route::get('ladang/delete/{id_ladang}', [LadangController::class, 'delete']);
route::get('/searchLadang', [LadangController::class, 'searchLadang']); //penambhan route pencarian data di menu ladang
Route::get('ladang/printpdf', [LadangController::class, 'printpdf']); //print pdf
Route::get('ladang/print', [LadangController::class, 'print']); //print printer
Route::get('ladang/ladangexcel', [LadangController::class, 'ladangexcel']); //penambahan fitur export excel


Route::get('pendapatan', [PendapatanController::class, 'index'])->name('pendapatan');
Route::get('pendapatan/detail/{id_pendapatan}', [PendapatanController::class, 'detail']);
Route::get('pendapatan/add', [PendapatanController::class, 'add']);
Route::post('pendapatan/insert', [PendapatanController::class, 'insert']);
Route::get('pendapatan/edit/{id_pendapatan}', [PendapatanController::class, 'edit']);
Route::post('pendapatan/update/{id_pendapatan}', [PendapatanController::class, 'update']);
Route::get('pendapatan/delete/{id_pendapatan}', [PendapatanController::class, 'delete']);
route::get('/searchPendapatan', [PendapatanController::class, 'searchPendapatan']); //penambhan route pencarian data di menu pendapatan
Route::get('pendapatan/print', [PendapatanController::class, 'print']); //print printer
Route::get('pendapatan/pendapatanexcel', [PendapatanController::class, 'pendapatanexcel']); //penambahan fitur export excel


Route::get('pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
Route::get('pengeluaran/detail/{id_pengeluaran}', [PengeluaranController::class, 'detail']);
Route::get('pengeluaran/add', [PengeluaranController::class, 'add']);
Route::post('pengeluaran/insert', [PengeluaranController::class, 'insert']);
Route::get('pengeluaran/edit/{id_pengeluaran}', [PengeluaranController::class, 'edit']);
Route::post('pengeluaran/update/{id_pengeluaran}', [PengeluaranController::class, 'update']);
Route::get('pengeluaran/delete/{id_pengeluaran}', [PengeluaranController::class, 'delete']);
route::get('/searchPengeluaran', [PengeluaranController::class, 'searchPengeluaran']); //penambhan route pencarian data di menu pendapatan
Route::get('pengeluaran/print', [PengeluaranController::class, 'print']); //print printer
Route::get('pengeluaran/pengeluaranexcel', [PengeluaranController::class, 'pengeluaranexcel']); //penambahan fitur export excel


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
