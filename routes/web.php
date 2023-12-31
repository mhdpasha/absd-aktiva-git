<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemRequestController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\AuthController;


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

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('login')->middleware('guest');
    Route::post('auth-user', 'auth')->name('auth.verif');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'displayDashboard');
        Route::get('/user', 'displayUser')->middleware('admin');
        Route::post('tambah-user', 'storeUser')->name('tambah.user');
        Route::post('delete-user', 'deleteUser')->name('delete.user');
        Route::post('/update-user/{id}', 'updateUser')->name('update.user');
    });

    Route::controller(AsetController::class)->group(function () {
        Route::get('/aset/inventaris', 'getInventaris');
        Route::get('/aset/furniture', 'getFurniture');
        Route::post('tambah-aset', 'storeAset')->name('tambah.aset');
        Route::post('delete-aset', 'deleteAset')->name('delete.aset');
        Route::post('/update-aset/{id}', 'updateAset')->name('update');
    });

    Route::controller(MaintenanceController::class)->group(function() {
        Route::get('/maintenance', 'displayMaintenance');
    });

    Route::controller(ItemController::class)->group(function () {
        Route::get('/item', 'displayItem');
        Route::post('tambah-itemcode', 'storeItem')->name('tambah.itemcode');
        Route::post('delete-itemcode', 'deleteItem')->name('delete.itemcode');
        Route::post('/update-item/{id}', 'updateItem')->name('update');
    });

    Route::controller(ItemRequestController::class)->group(function() {
        Route::get('/request', 'displayRequest');
        Route::post('tambah-request', 'storeRequest')->name('tambah.request');
        Route::post('delete-request', 'deleteRequest')->name('delete.request');
        Route::post('accept-request', 'acceptRequest')->name('accept.request');
        Route::post('reject-request', 'rejectRequest')->name('reject.request');
    });
});