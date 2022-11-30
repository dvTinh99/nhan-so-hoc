<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('index');
})->name('index');
//login, logout
Route::get('/dang-ki', function () {
    return view('pages.dang-ki');
});
Route::get('/dang-nhap', function () {
    return view('pages.dang-nhap');
});

Route::get('/dang-xuat', [UserController::class, 'logout'])->name('logout');

// resgister

Route::post('/dang-ki', [UserController::class, 'register'])->name('register');
Route::post('/dang-nhap', [UserController::class, 'login'])->name('login');


// pages
Route::get('/bieu-do-ngay-sinh', function () {
    return view('pages.bieu-do-ngay-sinh');
});
Route::get('/lich-su-tra-cuu', function () {
    return view('pages.lich-su-tra-cuu');
});
Route::get('/quan-li-tai-khoan', function () {
    return view('pages.quan-li-tai-khoan');
});


