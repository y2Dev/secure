<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\UserController;
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



Route::get('/admin/actu-lister', [ActuController::class,'index'])->middleware(['auth'])->name("admin-actu-lister") ;

Route::get('/admin/actu-editer', [ActuController::class,'index'])->middleware(['auth'])->name("admin-actu-editer") ;

Route::get('/admin/user', [UserController::class,'index'])->middleware(['auth'])->name("admin-user") ;


                                    /* Management of right users */
Route::get('/admin/user/right/{id}', [UserController::class,'manageRight'])->middleware(['auth'])->name("admin-user-right") ;





