<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/noticias", [NoticiasController::class, 'getAllNotice']);
Route::post("/noticias", [NoticiasController::class, 'createNotice']);

Route::get("/noticias/{id}", [NoticiasController::class, 'getNotice']);
Route::patch("/noticias/{id}", [NoticiasController::class, 'updateNotice']);
Route::delete("/noticias/{id}", [NoticiasController::class, 'deleteNotice']);
