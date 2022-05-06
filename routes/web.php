<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\NewsController;
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
Route::get('/admin/user/right/{user}', [UserController::class,'manageRight'])->middleware(['auth'])->name("admin-user-right") ;




Route::get('/admin/actu-lister', [ActuController::class,'index'])->name("admin-actu-lister", "admin-actu-ajouter") ;


Route::get('/admin/actu-editer', [ActuController::class,'editer'])->name("admin-actu-editer") ;
Route::post('/admin/actu-editer', [ActuController::class,'create'])->name("admin-actu-editer") ;


Route::get('/admin/actu-editer/{actu}', [ActuController::class,'editer'])->name("admin-actu-modifier") ;
Route::post('/admin/actu-editer/{actu}', [ActuController::class,'update'])->name("admin-actu-modifier") ;

Route::get('/admin/actu-supprimer/{actu}', [ActuController::class,'delete'])->name("admin-actu-supprimer") ;





// Route::get('/detail', function () {
//     return view('detail-actu');
// });


Route::get('/index', [NewsController::class,'index'])->name("index") ;

Route::get('/detail', [NewsController::class,'detail'])->name("detail") ;