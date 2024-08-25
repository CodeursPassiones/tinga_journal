<?php

use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\ArticleWebController;
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

    /*
     * Articles
     */
    Route::prefix('/articles')->group(function () {
        Route::get('/liste', [ArticleWebController::class, 'index']
        )->name('web.article.liste');
    });
});

Route::group(['middleware' => 'guest'], function () {
    /*
     * Auth
     */
    Route::get('/login', [AuthController::class, 'login']
    )->name('login');
    Route::post('/login', [AuthController::class, 'logUser']
    );
    // Route::get('/register', function () {
    //     return view('pages.auth.register.index');
    // })->name('register');
});
Route::group(['middleware' => 'auth'], function () {
    /*
     * Admin
     */
    Route::prefix('/admin')->group(function () {
        /*
         * Articles
         */

        Route::prefix('/articles')->group(function () {
            Route::get('/list', [ArticleAdminController::class, 'index'])->name('admin.articles.list');
            Route::get('/create', [ArticleAdminController::class, 'create'])->name('admin.articles.create');
        });
    });
    /*
     * Logout
     */
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
