<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Packet;


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


Route::group(['middleware' => ['web']], function () {
    /**
     * Show Task Dashboard
     */
    Route::get('/', function () {
        $categories=\App\Models\Categorie::orderBy('created_at', 'asc')->get();



        return view('app', [
            'categories' =>$categories,
        ]);
    });

    /**
     * Add New Task
     */
    Route::post('/scanner', [\App\Http\Controllers\PacketController::class, 'scanner']);

    /**
     * Delete Task
     */


    Route::get('/categories', [\App\Http\Controllers\CategorieController::class, 'show']);
    Route::post('/categories/updateAll', [\App\Http\Controllers\CategorieController::class, 'updateAll']);
    Route::post('/categorie/create', [\App\Http\Controllers\CategorieController::class, 'create']);
    Route::get('/categorie/{id}/palettes', [\App\Http\Controllers\CategorieController::class, 'palettes']);

    Route::get('/palettes', [\App\Http\Controllers\PaletteController::class, 'show']);
    Route::get('/palette/{id}', [\App\Http\Controllers\PaletteController::class, 'palette']);


    Route::get('/packets', [\App\Http\Controllers\PacketController::class, 'show']);
    Route::delete('/packet/destroy/{id}', [\App\Http\Controllers\PacketController::class, 'destroy']);


});
