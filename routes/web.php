<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LadangController;
use App\Http\Controllers\PendapatanController;
use App\Http\Controllers\PengeluaranController;

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

/*Route::get('/', function(){
    return view('welcome');
});*/

Route::get('/', [HomeController::class, 'index']);

Route::get('ladang', [LadangController::class, 'index'])->name('ladang');
Route::get('ladang/detail/{id_ladang}', [LadangController::class, 'detail']);
Route::get('ladang/add', [LadangController::class, 'add']);
Route::post('ladang/insert', [LadangController::class, 'insert']);
Route::get('ladang/edit/{id_ladang}', [LadangController::class, 'edit']);
Route::post('ladang/update/{id_ladang}', [LadangController::class, 'update']);

Route::get('pendapatan', [PendapatanController::class, 'index'])->name('pendapatan');
Route::get('pendapatan/detail/{id_pendapatan}', [PendapatanController::class, 'detail']);
Route::get('pendapatan/add', [PendapatanController::class, 'add']);
Route::post('pendapatan/insert', [PendapatanController::class, 'insert']);
Route::get('pendapatan/edit/{id_pendapatan}', [PendapatanController::class, 'edit']);
Route::post('pendapatan/update/{id_pendapatan}', [PendapatanController::class, 'update']);

Route::get('pengeluaran', [PengeluaranController::class, 'index'])->name('pengeluaran');
Route::get('pengeluaran/detail/{id_pengeluaran}', [PengeluaranController::class, 'detail']);
Route::get('pengeluaran/add', [PengeluaranController::class, 'add']);
Route::post('pengeluaran/insert', [PengeluaranController::class, 'insert']);
Route::get('pengeluaran/edit/{id_pengeluaran}', [PengeluaranController::class, 'edit']);
Route::post('pengeluaran/update/{id_pengeluaran}', [PengeluaranController::class, 'update']);


