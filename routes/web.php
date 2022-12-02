<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\PaymentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
Route::get('/doi-mat-khau', function () {
    return view('pages.doi-mat-khau');
});
Route::get('/quen-mat-khau', function () {
    return view('pages.quen-mat-khau');
});

Route::get('/dang-xuat', [UserController::class, 'logout'])->name('logout');

// resgister

Route::post('/doi-mat-khau', [UserController::class, 'changePassword'])->name('change-password');
Route::post('/quen-mat-khau', [UserController::class, 'forgotPassword'])->name('forgot-password');
Route::post('/dang-ki', [UserController::class, 'register'])->name('register');
Route::post('/dang-nhap', [UserController::class, 'login'])->name('login');


// pages client
//Bieu Do Ngay Sinh
Route::get('/bieu-do-ngay-sinh', function () {
    return view('pages.client.bd_ngay_sinh.bieu-do-ngay-sinh');
});
Route::get('/y-nghia-con-so', function () {
    return view('pages.client.bd_ngay_sinh.y-nghia-con-so');
});
Route::get('/y-nghia-mui-ten', function () {
    return view('pages.client.bd_ngay_sinh.y-nghia-mui-ten');
});
// So Chu Dao
Route::get('/so-chu-dao', function () {
    return view('pages.client.so_chu_dao.so-chu-dao');
})->name('pages.so_chu_dao');
Route::get('/y-nghia-so-chu-dao', function () {
    return view('pages.client.so_chu_dao.y-nghia-so-chu-dao');
})->name('pages.y-nghia-so-chu-dao');

// Suc Manh Cua Ten
Route::get('/so-linh-hon-bieu-dat-ten-rieng', function () {
    return view('pages.client.suc_manh_cua_ten.so-linh-hon-bieu-dat-ten-rieng');
});
Route::get('/y-nghia-so-linh-hon', function () {
    return view('pages.client.suc_manh_cua_ten.y-nghia-so-linh-hon');
});
Route::get('/y-nghia-so-bieu-dat', function () {
    return view('pages.client.suc_manh_cua_ten.y-nghia-so-bieu-dat');
});

Route::get('/lich-su-tra-cuu', function () {
    return view('pages.client.lich-su-tra-cuu');
});
Route::get('/lich-su-thanh-toan', function () {
    $user = Auth::user();
    $paymentHistory = $user->payment_histories;
    return view('pages.client.lich-su-thanh-toan', compact('paymentHistory', 'user'));
});

Route::get('/thanh-toan', function () {
    $bankOwner = config('bank');
    return view('pages.client.thanh_toan.thanh-toan', compact('bankOwner'));
})->middleware('auth');

Route::post('/thanh-toan', function (Request $request)
{
    $price = $request->price;
    $turn = $request->turn;
    $name_pack = $request->name_pack;
    $bankOwner = config('bank');
    return view('pages.client.thanh_toan.thanh-toan', compact('bankOwner', 'price', 'turn', 'name_pack'));
})->middleware('auth');

Route::post('/luu-thanh-toan', function (Request $request)
{
    // dd($request->all());
    $paymentHistory = PaymentHistory::create([
        'user_id' => Auth::id(),
        'name_pack' => $request->name_pack,
        'turn' => $request->turn,
        'price' => $request->price,
        'status' => config('status.PENDING'),
    ]);
    // dd($paymentHistory);
    return redirect()->route('index');
})->middleware('auth');

// pages admin
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/quan-li-tai-khoan', [AdminController::class, 'listUsers']);

    Route::get('/quan-li-tra-cuu', function () {
        return view('pages.admin.quan-li-tra-cuu');
    });
    Route::get('/quan-li-thanh-toan', function () {
        $paymentHistorys = PaymentHistory::with('user')->get();
        return view('pages.admin.quan-li-thanh-toan', compact('paymentHistorys'));
    });

    Route::get('/user/delete/{id}', [AdminController::class, 'deleteUser'])->name('user.delete');
});
