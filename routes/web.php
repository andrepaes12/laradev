<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

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
    // rota inicial
    return view('welcome');
});

Route::get('/imoveis', [PropertyController::class, 'index'])->name('property.index');
Route::get('/imoveis/show/{url}', [PropertyController::class, 'show'])->name('property.show');

Route::get('/imoveis/novo', [PropertyController::class, 'create'])->name('property.create');
Route::post('/imoveis/store', [PropertyController::class, 'store'])->name('property.store');

Route::get('/imoveis/edit/{url}', [PropertyController::class, 'edit'])->name('property.edit');
Route::put('/imoveis/update/{url}', [PropertyController::class, 'update'])->name('property.update');

Route::get('/imoveis/remove/{url}', [PropertyController::class, 'destroy'])->name('property.destroy');


