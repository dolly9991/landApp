<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/redirects', [HomeController::class, 'index']);

Route::get('/landRights', function () {
    return view('landRights');
})->name('landRights');

Route::redirect('/', '/login');

Route::get('/landrights', [LandRightsController::class, 'index']);
Route::get('/landrights', [LandRightsController::class, 'create']);
Route::post('/landrights', [LandRightsController::class, 'store']);
Route::get('/landrights/{id}', [LandRightsController::class, 'show']);

