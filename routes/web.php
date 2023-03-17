<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\OrderPaypal;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMessage;
use App\Http\Controllers\UserAdmin;
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



// -------------------------------------------My Routes-------------------------------------------



Route::get('/', function () {
    return view('index');
})->name('homeurl');


Route::get('/buynow',[FrontController::class,'BuyNow'])->name('buynow');
Route::post('/orderpaypal',[OrderPaypal::class,'Orderpaypal'])->name('orderpaypal');
Route::post('/signupformdata',[FrontController::class,'Signupformdata'])->name('signupformdata');
Route::post('/signinformdata',[FrontController::class,'Signinformdata'])->name('signinformdata');




// User 

Route::get('/userAdmin',[UserAdmin::class,'userAdmin'])->name('userAdmin');
Route::post('/updateprofile',[UserAdmin::class,'Updateprofile'])->name('updateprofile');
Route::get('/userlogin',[AdminController::class,'Userlogin'])->name('userlogin');
Route::get('/logout',[AdminController::class,'Logout'])->name('logout');
Route::post('/user/login',[AdminController::class,'Userlogindirection'])->name('userlogindirection');

// Admin 


Route::get('/admin',[AdminController::class,'AdminLogin'])->name('adminlogin');
Route::post('/admin/dashboard',[AdminController::class,'Logindirection'])->name('logindirection');
Route::get('/admin/dashboard',[AdminController::class,'AdminDashboardRedirect'])->name('adminRedirect');



// --------------------Send Message -----------------------


Route::post('/sendmessage',[SendMessage::class,'SendMessage'])->name('sendmessage');