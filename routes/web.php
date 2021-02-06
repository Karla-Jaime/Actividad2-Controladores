<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controller\Admin\NoticiaController as AdminNoticiaController;
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

Route::get('/', [InicioController::class, "index"]); 
Route::get('/contacto', [InicioController::class, "contacto"]);

Route::get('/noticias',[NoticiaController::class, "lista"])  -> name("noticias");
Route::get('/noticias/{id}',[NoticiaController::class, "detalles"]) ->name("noticias.detalles");

/*
Recuersos
Crear - create
Almacenar -store
Listar - index
Mostrar detalles - show
Editar -edit
actualziar - update
Elimitar -destroy
*/

Route::get("/admin/noticias", [AdminNoticiaController::class, "index"])->name("admin.noticias.index");