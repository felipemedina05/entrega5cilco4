<?php

use App\Http\Controllers\UsuariosController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(UsuariosController::class)->group(function(){
    Route::get('/usuarios','index');
  //  Route::get('/usuarios/{id}','show');
    Route::post('/addUser','store');
   // Route::put('/usuarios/{id}','update');
    //Route::delete('/usuarios/{id}','destroy');
});