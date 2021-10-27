<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
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

Route::view('/', 'index')->name('Home');

Route::view('/Registration', 'registration')->name('Enroll');
Route::view('/About', 'About')->name('About');
Route::view('/Contact', 'contact')->name('Contact');
Route::view('/Gnayak', 'Gnayak')->name('Gnayak');
Route::view('/Gnayak', 'Gnayakreg')->name('Gnayak');
Route::view('/Gnayaklogin', 'Gnayaklogin')->name('Gnayaklogin');
Route::view('/Gnayaklist', 'Gnayaklist')->name('Gnayaklist');

Route::view('/Login', 'login')->name('Login');
Route::post('/Login', [AuthController::class, 'login'])->name('Auth.Login');
Route::post('/register', [MemberController::class, 'register'])->name('Enroll.user');
Route::view('/Doctorji', 'Doctorji')->name('Doctorji');
Route::view('Guruji', 'Guruji')->name('Guruji');
Route::view('Mohanji', 'Mohanji')->name('Mohanji');

Route::get('/Logout', [AuthController::class, 'logout'])->name('User.logout');


Route::prefix('Address')->group(function () {
    Route::post('get_states', [AddressController::class, 'getStates'])->name('Address.get_states');
    Route::post('get_vibhags', [AddressController::class, 'getVibhags'])->name('Address.get_vibhags');
    Route::post('get_zillas', [AddressController::class, 'getZillas'])->name('Address.get_zillas');
    Route::post('get_cities', [AddressController::class, 'getCities'])->name('Address.get_cities');
    Route::post('get_revenue_mandals', [AddressController::class, 'getRevenueMandal'])->name('Address.get_revenue_mandals');
    Route::post('get_mandals', [AddressController::class, 'getMandals'])->name('Address.get_mandals');
    Route::post('get_panchayathis', [AddressController::class, 'getPanchayathis'])->name('Address.get_panchayathis');

});

Route::prefix('Dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('Admin.index');
    Route::prefix('User')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('Admin.Users.view');
        Route::post('/get_all', [UserController::class, 'getUsers'])->name('Admin.Users.all');
        Route::prefix('Export')->group(function () {
            Route::post('/', [UserController::class, 'export'])->name('Admin.Users.export');
            Route::get('/download/{name}', [UserController::class, 'download'])->name('Admin.Users.export.download');
        });
    });
});