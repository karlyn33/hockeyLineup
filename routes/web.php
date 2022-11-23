<?php

use App\Http\Controllers\LeagueController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/league', [LeagueController::class, 'list'])->name('league');
    Route::get('/league/index', [LeagueController::class, 'index'])->name('league.index');
    Route::get('/league/create', [LeagueController::class, 'create'])->name('league.create');
    Route::post('/league/store', [LeagueController::class, 'store'])->name('league.store');
    Route::get('/league/{id}/edit', [LeagueController::class, 'edit'])->name('league.edit');
    Route::put('/league/{id}/update', [LeagueController::class, 'update'])->name('league.update');
    Route::delete('/league/{id}/destroy', [LeagueController::class, 'destroy'])->name('league.destroy');
});

require __DIR__ . '/auth.php';
