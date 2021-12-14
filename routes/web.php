<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JogosController;

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

#Route::view('/jogos', 'jogos', ['name'=>'GTA']);

// Route::view('/jogos/{name}', function($name){
//     return view('jogos', ['nomeJogo'=>$name]);
// });

// Route::get('/jogos', [JogosController::class, 'index']);

Route::prefix('jogos')->group(function(){
    // RETRIEVE
    Route::get('/', [JogosController::class, 'index'])->name('jogos-index');

    // CREATE
    Route::get('/create', [JogosController::class, 'create'])->name('jogos-create');
    Route::post('/', [JogosController::class, 'store'])->name('jogos-store');

    // UPDATE
    Route::get('/edit/{id}', [JogosController::class, 'edit'])
    ->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [JogosController::class, 'update'])
    ->where('id','[0-9]+')->name('jogos-update');
});
