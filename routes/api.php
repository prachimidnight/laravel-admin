<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* User Route */
Route::post('/adduser', [UserController::class, 'register']);
Route::post('/getalluser', [UserController::class, 'userlist']);
Route::post('/updateuser', [UserController::class, 'update']);
Route::post('/deleteuser', [UserController::class, 'delete']);
Route::post('/loginuser', [UserController::class, 'login']);
Route::post('/logoutuser', [UserController::class, 'destroy']);

Route::post('/addcountry', [CountryController::class, 'create']);
Route::post('/addstate', [StateController::class, 'create']);
Route::post('/addcity', [CityController::class, 'create']);
Route::post('/addrole', [RoleController::class, 'create']);