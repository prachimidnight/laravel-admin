<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/set_session', [GuestController::class, 'set_session']);
Route::get('/logoutuser', [GuestController::class, 'destroy'])->name('session.destroy');

Route::get('/', function() {
    return view('/adminview/login');
})->name('login');

Route::get('admin/dashboard', function() {
    return view('/adminview/dashboard');
});

Route::get('/admin/leads', function() {
    return view('/adminview/leads');
});

Route::get('/admin/guest', function() {
    return view('/adminview/guest');
});

Route::get('/admin/addguest', function() {
    return view('/adminview/addguest');
});