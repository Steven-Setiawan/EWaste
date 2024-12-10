<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CollectionCenterController;
use App\Http\Controllers\EWasteController;
use App\Http\Controllers\GuestController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/LoginPage', [UserController::class, 'Login'])->name('Login.index');
Route::post('/login', [UserController::class, 'loginUser'])->name('login.submit');

Route::get('/RegisterPage/create', [UserController::class, 'create'])->name('Register.create');
Route::post('/RegisterPage/register', [UserController::class, 'register'])->name('Register.register');

Route::get('/userHomePage', [UserController::class, 'userHome'])->name('user.home')->middleware('auth');
Route::get('/customer', [UserController::class, 'CustomerPage'])->name('customer.page');
Route::get('/AddEwaste', [EWasteController::class, 'Add'])->name('ewaste.add');
Route::post('/AddEwaste', [EWasteController::class, 'AddEwaste'])->name('ewaste.submit');

Route::get('/profile', [UserController::class, 'userProfile'])->name('user.profile');
Route::put('/update', [UserController::class, 'updateProfile'])->name('user.update');

Route::get('/about', [UserController::class, 'userAbout'])->name('user.about');
Route::get('/aboutUS', [GuestController::class, 'AboutUs'])->name('about.page');


Route::get('/adminHomePage', [UserController::class, 'adminHome'])->name('admin.home')->middleware('auth');

Route::get('/manageOrder',[OrderController::class, 'manageOrder'])->name('manage.Order');
Route::post('/ewaste/{id}/process', [OrderController::class, 'processOrder'])->name('processOrder');
Route::post('/ewaste/{id}/complete', [OrderController::class, 'completeOrder'])->name('completeOrder');
Route::delete('/ewaste/{id}/delete', [OrderController::class, 'deleteOrder'])->name('deleteOrder');

Route::get('/manageCollection/create',[CollectionCenterController::class, 'manageCollection'])->name('manage.Collection');
Route::post('/manageCollection/add', [CollectionCenterController::class, 'addCollection'])->name('add.collection');
