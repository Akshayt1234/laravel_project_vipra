<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\ContactController;




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


// IndexController
Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/sale', [IndexController::class,'sale'])->name('sale');
Route::get('/book', [IndexController::class,'book'])->name('book');




// signupController
Route::get('/register', [signupController::class,'showSignUpForm'])->name('register');
Route::post('/registerUser', [signupController::class,'register'])->name('registerUser');




// loginController
Route::get('/login', [loginController::class,'showLoginForm'])->name('login');
Route::post('/loginUser', [loginController::class,'login'])->name('loginUser');


// logoutController
Route::post('/logout', [logoutController::class, 'logout'])->name('logout');


// AdminController
Route::get('/admindashboard', [AdminController::class,'admindashboard'])->name('admindashboard');
Route::get('/admin_contact', [AdminController::class,'admin_contact'])->name('admin_contact');
Route::get('/admin_profile', [AdminController::class,'admin_profile'])->name('admin_profile');
Route::get('/admin_users', [AdminController::class,'admin_users'])->name('admin_users');


// UserController
Route::get('/userdashboard', [UserController::class,'userdashboard'])->name('userdashboard');
Route::get('/user_contact', [UserController::class,'user_contact'])->name('user_contact');
Route::get('/user_profile', [UserController::class,'user_profile'])->name('user_profile');


// ContactController
Route::put('/contact', [ContactController::class,'contact'])->name('contact');