<?php

use App\Http\Controllers\Admin\GameController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\OutputController;
use App\Http\Controllers\ResultController;
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
    return redirect()->route('login');
});

    // output
    Route::get('outputs', [OutputController::class, 'index'])->name('outputs');

Route::group(['middleware' => ['auth','isAdmin'],'prefix' => 'admin', 'as' => 'admin.'], function() {

    // team
    Route::resource('teams', TeamController::class);
    Route::delete('teams_mass_destroy', [TeamController::class, 'massDestroy'])->name('teams.mass_destroy');
    
    // game
    Route::resource('games', GameController::class);
    Route::delete('games_mass_destroy', [GameController::class, 'massDestroy'])->name('games.mass_destroy');

});

Auth::routes(['register' => false]);