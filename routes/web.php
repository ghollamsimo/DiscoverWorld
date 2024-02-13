<?php

use App\Http\Controllers\RecitsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// -----------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('/recit', function () {
    return view('singleRecit');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
// ---------------------------------------------------------------------

// ----------------------------------------------------------------------
Route::post('/register', [UserController::class, 'userRegister']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/', [UserController::class, 'logout'])->name('logout');

// --------------------------------------------------------------------------

Route::post('/profile', [RecitsController::class, 'Recit'])->name('profile');

Route::get('/profile', [RecitsController::class, 'DisplayTheRecits'])->name('aventures.profile');
Route::get('/', [RecitsController::class, 'afficherAll'])->name('welcome');

Route::get('/singleRecit', [RecitsController::class, 'singleRecit'])->name('aventures.singleRecit');

Route::get('/singleRecit' , [RecitsController::class , 'SingleRecitUser'])->name('aventures.singleRecit');

Route::get('/filterDesc', [RecitsController::class, 'filterDesc'])->name('filter.desc');
Route::get('/filterAsc', [RecitsController::class, 'filterAsc'])->name('filter.asc');

Route::get('/destination', [RecitsController::class, 'filterDestination'])->name('filter.destination');

Route::get('/recit/{recit}', [RecitsController::class, 'singleRecit']);
