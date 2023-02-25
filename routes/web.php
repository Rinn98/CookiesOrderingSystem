<?php

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
    return view('homepage');
});

use App\Http\Controllers\CustomAuthController;
Route::get('userdashboard', [CustomAuthController::class, 'userdashboard'])-> name('userdashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'login'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('welcome', [CustomAuthController::class, 'welcome']);
Route::get('admin', [CustomAuthController::class, 'adminindex'])->name('admin')->middleware('isAdmin');
Route::get('homepage', [CustomAuthController::class, 'homepage'])-> name('homepage');


use App\Http\Controllers\AdminController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('admindashboard', AdminController::class);

use App\Http\Controllers\StockController; 
Route::get('/', function () {
    return view('welcome');
});

Route::resource('adminstock', StockController::class);


use App\Http\Controllers\OrderController; 
Route::get('/', function () {
    return view('welcome');
});
Route::get('stafforderss', [OrderController::class, 'stafforders'])->name('stafforderss');
Route::get('send', [OrderController::class, 'send'])->name('send');
Route::get('neworderss', [OrderController::class, 'neworder'])->name('neworderss');

Route::resource('adminorder', OrderController::class);

use App\Http\Controllers\PaymentController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('adminpayment', PaymentController::class);


use App\Http\Controllers\ProfitController; 
Route::get('profitreport', [ProfitController::class, 'index'])->name('profitreport.index');
// Route::get('dailyreport', [DailyController::class, 'createPDF'])->name('dailyreport');
Route::post('profitreport', [ProfitController::class, 'index'])->name('searchdate');

use App\Http\Controllers\DailyController; 
Route::get('dailyreport', [DailyController::class, 'index'])->name('dailyreport');
// Route::get('dailyreport', [DailyController::class, 'createPDF'])->name('dailyreport');
Route::post('dailyreport', [DailyController::class, 'index'])->name('search.date');




use App\Http\Controllers\CartController; 
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');

use App\Http\Controllers\MenuController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('menu', MenuController::class);

use App\Http\Controllers\PaymentCustController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('paymentcust', PaymentCustController::class);

use App\Http\Controllers\TrackOrderController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('trackorder', TrackOrderController::class);

use App\Http\Controllers\StaffController; 

Route::get('stafflogin', [StaffController::class, 'index'])-> name('stafflogin');
Route::post('post-login', [StaffController::class, 'postLogin'])-> name('postLogin');
Route::get('staffregistration', [StaffController::class, 'staffregistration'])-> name('staffregistration');
Route::post('post-registration', [StaffController::class, 'postRegistration'])-> name('postRegistration');
Route::get('dashboardstaff', [StaffController::class, 'dashboardstaff'])-> name('dashboardstaff'); 
Route::get('logout', [StaffController::class, 'logout'])-> name('logout');
Route::get('welcome', [StaffController::class, 'welcome']);

use App\Http\Controllers\StaffOrderController; 
Route::get('/', function () {
    return view('welcome');
});
Route::get('stafforders', [StaffOrderController::class, 'stafforders'])->name('stafforders');
Route::get('send', [StaffOrderController::class, 'send'])->name('send');
Route::get('neworder', [StaffOrderController::class, 'neworder'])->name('neworder');

Route::resource('stafforder', StaffOrderController::class);

use App\Http\Controllers\StaffPaymentController; 
Route::get('/', function () {
    return view('welcome');
});

Route::resource('staffpayment', StaffPaymentController::class);

use App\Http\Controllers\ManageStaffController; 
Route::get('/', function () {
    return view('welcome');
});
Route::resource('staff', ManageStaffController::class);


use App\Http\Controllers\MonthlySalesController; 
Route::get('monthlysales', [MonthlySalesController::class, 'index'])->name('monthlysales');
// Route::get('dailyreport', [DailyController::class, 'createPDF'])->name('dailyreport');
Route::post('monthlysales', [MonthlySalesController::class, 'index'])->name('search.by.date');