<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MoncompteController;

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
    return view('welcome');
});

require __DIR__.'/auth.php';





                                            /*Mes ajouts*/
Route::get('/moncompte', [MoncompteController::class,'index'])->name("moncompte");


Route::get('/panier', [MoncompteController::class,'panier'])->name("panier");


Route::get('/admin', [DashboardController::class,'index'])->middleware(['auth'])->name("dashboard");


