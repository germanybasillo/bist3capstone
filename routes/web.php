<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\TenantController;
use App\Http\Controllers\Room\RoomController;
use App\Http\Controllers\Bed\BedController;
use App\Http\Controllers\Bed\BedAssignController;
use App\Http\Controllers\Messages\NoticeController;



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

Route::get('/', function () { return view('welcome'); });

// =============AUTHENTICATION=================================
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::get('/registration', 'App\Http\Controllers\Auth\RegisterController@registration')->name('registration');
Route::post('/login',  [LoginController::class, 'validate_login'])->name('validate_login');
Route::post('/registration',  [RegisterController::class, 'validate_registration'])->name('validate_registration');
Route::get('/logout',  [LogoutController::class, 'logout'])->name('logout');
// =============END=================================

// =============CRUD TENANT=================================
Route::get('/tenants',  [TenantController::class, 'getAll']);
Route::get('/tenants/{id}',  TenantController::class .'@edit')->name('tenants.edit');
Route::post('/tenant-store',[TenantController::class, 'store']);
Route::put('/tenants/{id}',[TenantController::class, 'update'])->name('tenants.update');
Route::delete('/tenants/{id}',TenantController::class .'@destroy')->name('tenants.destroy');
// =============END=================================
Route::get('/addtenant',  [TenantController::class, 'addtenant']);

// =============CRUD ROOM=================================
Route::get('/rooms',  [RoomController::class, 'getAll']);
Route::get('/rooms/{id}',  RoomController::class .'@edit')->name('rooms.edit');
Route::post('/rooms-store',  RoomController::class .'@store')->name('rooms.store');
Route::put('/rooms/{id}',[RoomController::class, 'update'])->name('rooms.update');
Route::delete('/rooms/{id}',RoomController::class .'@destroy')->name('rooms.destroy');
// =============END=================================
Route::get('/addroom',  [RoomController::class, 'addroom']);

// =============CRUD BED=================================
Route::get('/beds',  [BedController::class, 'getAll']);
Route::get('/beds/{id}',  BedController::class .'@edit')->name('beds.edit');
Route::post('/beds-store',BedController::class. '@store')->name('beds.store');
Route::put('/beds/{id}',[BedController::class, 'update'])->name('beds.update');
Route::delete('/beds/{id}',BedController::class .'@destroy')->name('beds.destroy');
// =============END=================================
Route::get('/addbed',  [BedController::class, 'addbed']);

// =============CRUD BED-ASSIGN=================================
Route::get('/bed_assigns',  [BedAssignController::class, 'getAll']);
Route::get('/bed_assigns/{id}',  BedAssignController::class .'@edit')->name('bed_assigns.edit');
Route::post('/bed_assigns-store',[BedAssignController::class. '@store'])->name('bed_assigns.store');
Route::put('/bed_assigns/{id}',[BedAssignController::class, 'update'])->name('bed_assigns.update');
Route::delete('/bed_assigns/{id}',BedAssignController::class .'@destroy')->name('bed_assigns.destroy');
// =============END=================================
Route::get('/addbedassign',  [BedAssignController::class, 'addbedassign']);


Route::get('bill', function () {
    return view('page.bill');
});


Route::get('invoice', function () {
    return view('page.invoice');
});

Route::get('invoice-print', function () {
    return view('page.invoice-print');
});


Route::get('payment-his', function () {
    return view('page.payment-his');
});


Route::get('payment', function () {
    return view('page.payment');
});

Route::get('sms', function () {
    return view('page.sms');
});

Route::get('notices', function () {
    return view('page.notices');
});

Route::get('/notices',  [NoticeController::class, 'message']);

Route::get('suggestion', function () {
    return view('page.suggestion');
});

Route::get('income', function () {
    return view('page.income');
});

Route::get('collectibles', function () {
    return view('page.collectibles');
});


// tenant dashboard


Route::get('notice', function () {
    return view('tenant.notice');
});


Route::get('suggestions', function () {
    return view('tenant.suggestions');
});

Route::get('add-suggestion', function () {
    return view('tenant.add-suggestion');
});


Route::get('add-proof', function () {
    return view('tenant.add-proof');
});


Route::get('proof', function () {
    return view('tenant.proof');
});

Route::get('payment-history', function () {
    return view('tenant.payment-history');
});

// end
// dashboard
Route::get('/landingpage', 'App\Http\Controllers\Page\PageController@admindashboard')->name('landingpage');
Route::get('index',  [PageController::class, 'tenantdashboard']);
// end