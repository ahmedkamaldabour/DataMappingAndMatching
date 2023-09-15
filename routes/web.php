<?php

use App\Http\Controllers\MainDataController;
use App\Http\Controllers\MapDataController;
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

Route::get('/', fn() => view('index'));


Route::get('main-data' , [MainDataController::class, 'index'])->name('main-data.index');
Route::get('main-data/create' , [MainDataController::class, 'create'])->name('main-data.create');
Route::post('main-data' , [MainDataController::class, 'store'])->name('main-data.store');


Route::get('map-data' , [MapDataController::class, 'index'])->name('map-data.index');
Route::post('map-data/import' , [MapDataController::class, 'import'])->name('map-data.import');
Route::post('map-data' , [MapDataController::class, 'store'])->name('map-data.store');
