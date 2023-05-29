<?php

use App\Http\Controllers\TeamController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\OutputController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('outputs');
});

    // output
    Route::get('outputs', [OutputController::class, 'index'])->name('outputs');

    // team
    Route::resource('teams', TeamController::class);
    
    // game
    Route::resource('games', GameController::class);