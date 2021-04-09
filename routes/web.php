<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LadangController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\LabaController;


/*Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);

Route::get('laba', [LabaController::class, 'index'])->name('laba');
Route::get('laba/detail/{id_laba}', [LabaController::class, 'detail']);
Route::get('laba/add', [LabaController::class, 'add']);
Route::post('laba/insert', [LabaController::class, 'insert']);
Route::get('laba/edit/{id_laba}', [LabaController::class, 'edit']);
Route::post('laba/update/{id_laba}', [LabaController::class, 'update']);
Route::get('laba/delete/{id_laba}', [LabaController::class, 'delete']);
route::get('/searchLaba', [LabaController::class, 'searchLaba']); //penambhan route pencarian data di menu pendapatan

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


Route::get('pendapatan', [PendapatanController::class, 'index'])->name('pendapatan');
Route::get('pendapatan/detail/{id_pendapatan}', [PendapatanController::class, 'detail']);
Route::get('pendapatan/add', [PendapatanController::class, 'add']);
Route::post('pendapatan/insert', [PendapatanController::class, 'insert']);
Route::get('pendapatan/edit/{id_pendapatan}', [PendapatanController::class, 'edit']);
Route::post('pendapatan/update/{id_pendapatan}', [PendapatanController::class, 'update']);
Route::get('pendapatan/delete/{id_pendapatan}', [PendapatanController::class, 'delete']);
route::get('/searchPendapatan', [PendapatanController::class, 'searchPendapatan']); //penambhan route pencarian data di menu pendapatan

Route::get('pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
Route::get('pengeluaran/detail/{id_pengeluaran}', [PengeluaranController::class, 'detail']);
Route::get('pengeluaran/add', [PengeluaranController::class, 'add']);
Route::post('pengeluaran/insert', [PengeluaranController::class, 'insert']);
Route::get('pengeluaran/edit/{id_pengeluaran}', [PengeluaranController::class, 'edit']);
Route::post('pengeluaran/update/{id_pengeluaran}', [PengeluaranController::class, 'update']);
Route::get('pengeluaran/delete/{id_pengeluaran}', [PengeluaranController::class, 'delete']);
route::get('/searchPengeluaran', [PengeluaranController::class, 'searchPengeluaran']); //penambhan route pencarian data di menu pendapatan



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
