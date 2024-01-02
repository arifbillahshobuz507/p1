<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// backend routes

// admin do login route
Route::get('/admin/from', [UserController::class, 'from'])->name('admin.from');
Route::post('/admin/login', [UserController::class, 'login'])->name('login.form.post');
//baclend dashbor page route 
Route::group(['prefix'=>'backend'],function (){

    // authenticatino route 
    Route::group(['middleware'=>'checkAdmin'],function (){
        Route::get('/dashbord', [AdminController::class, 'dashbord'])->name('dashbord');
    });

});
