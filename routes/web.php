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
// web.php - Add this route
Route::get('/profile-data', [GuestController::class, 'profile'])->name('profile.data');

Route::get('/', function() {
    return view('adminview/login');
})->name('login');

Route::get('/dashboard', function() {
    return view('adminview/dashboard');
});

Route::get('/leads', function() {
    return view('adminview/leads');
});

Route::get('/guest', function() {
    return view('adminview/guest');
});

Route::get('/addguest', function() {
    return view('adminview/addguest');
});

Route::get('/masters', function() {
    return view('adminview/masters');
});

Route::get('/city', function() {
    return view('adminview/city');
});

Route::get('/state', function() {
    return view('adminview/state');
});

Route::get('/country', function() {
    return view('adminview/country');
});

Route::get('/userroles', function() {
    return view('adminview/userroles');
});

Route::get('/profile', function() {
    return view('adminview/profile');
});

Route::get('/functioncategories', function() {
    return view('adminview/functioncategories');
});

Route::get('/bulkupload', function() {
    return view('adminview/bulkupload');
});


