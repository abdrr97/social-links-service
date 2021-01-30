<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
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

require __DIR__ . '/auth.php';

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/dashboard', function ()
{
    return view('dashboard');
    //
})->middleware(['auth'])->name('dashboard');


Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function ()
{
    Route::get('links', [LinkController::class, 'index'])->name('links.index');
    Route::get('links/new', [LinkController::class, 'create'])->name('links.create');
    Route::post('links/new', [LinkController::class, 'store'])->name('links.store');
    Route::get('links/{link}', [LinkController::class, 'edit'])->name('links.edit');
    Route::put('links/{link}', [LinkController::class, 'update'])->name('links.update');
    Route::delete('links/{link}', [LinkController::class, 'destroy'])->name('links.destroy');

    Route::get('settings', [UserController::class, 'edit'])->name('user.edit');
    Route::put('settings', [UserController::class, 'update'])->name('user.update');

    //
});

Route::post('visit/{link}', [VisitController::class, 'store'])->name('visit.store');
Route::get('{user}', [UserController::class, 'show'])->name('user.show');
