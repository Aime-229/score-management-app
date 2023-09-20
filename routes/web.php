<?php

use App\Http\Controllers\EquipeController;
use App\Models\Equipe;
use GuzzleHttp\Promise\Create;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('equipes', EquipeController::class);
Route::get('/equipes', [App\Http\Controllers\EquipeController::class,'create'])->name('add-equipe');
Route::get('/joueurs', [App\Http\Controllers\JoueurController::class,'create'])->name('add-joueur');
Route::get('/users', [App\Http\Controllers\UserController::class,'create'])->name('users');
Route::get('/mon-compte', [App\Http\Controllers\UserController::class,'show'])->name('compte');


require __DIR__.'/auth.php';
