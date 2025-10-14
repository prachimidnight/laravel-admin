<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;

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

Route::prefix('country')->controller(CountryController::class)->group(function() {
    Route::post('/create','create');
    Route::post('/','list');
    Route::post('/update','update');
    Route::post('/delete','delete');
});

Route::prefix('state')->controller(StateController::class)->group(function() {
    Route::post('/create','create');
    Route::post('/','list');
    Route::post('/update','update');
    Route::post('/delete','delete');
});

Route::prefix('role')->controller(RoleController::class)->group(function() {
    Route::post('/create','create');
    Route::post('/','list');
    Route::post('/update','update');
    Route::post('/delete','delete');
});

Route::prefix('city')->controller(CityController::class)->group(function() {
    Route::post('/create','create');
    Route::post('/','list');
    Route::post('/update','update');
    Route::post('/delete','delete');
});