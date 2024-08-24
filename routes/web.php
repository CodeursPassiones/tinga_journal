<?php

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

Route::get('/', function () {
    return view('pages.web.home.index');
})->name('home');

Route::prefix('/web')->group(function () {
    Route::get('/about', function () {
        return view('pages.web.home.index');
    })->name('web.about');
});

Route::group(['middleware' => 'guest'], function () {
    /*
     * Auth
     */
    Route::get('/login', function () {
        return view('pages.auth.login.index');
    })->name('login');
    Route::get('/register', function () {
        return view('pages.auth.register.index');
    })->name('register');
});
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('/admin')->group(function () {
        Route::prefix('/articles')->group(function () {
            Route::get('/list', function () {
                return view('pages.admin.articles.index');
            })->name('admin.articles.list');
        });
    });
});
