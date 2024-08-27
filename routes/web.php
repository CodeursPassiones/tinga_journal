<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\IssueWebController;
use App\Http\Controllers\Web\ArticleWebController;
use App\Http\Controllers\Web\WebsiteWebController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\ArticleAdminController;

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

Route::get('/', [WebsiteWebController::class, 'home'])->name('home');

Route::prefix('/web')->group(function () {
    /*
     * About et normes
     */
    Route::get('/about', [WebsiteWebController::class, 'aboutUs'])->name('web.about');
    Route::get('/normes', function () { return view('pages.web.normes.index');})->name('web.normes');

    /*
     * Instructions
     */
    Route::prefix('/instructions')->group(function () {
        Route::get('/rapporteurs', function () { return view('pages.web.normes.rapporteurs');})->name('instructions.rapporteurs');
        Route::get('/auteurs', function () {return redirect()->route('web.normes');})->name('instructions.auteurs');
    });
    /*
     * Administration
     */
    Route::prefix('/administration')->group(function () {
        Route::get('/redaction', function () { return view('pages.web.normes.redaction');})->name('administration.redaction');
        Route::get('/gestion', function () {return view('pages.web.normes.gestion');})->name('administration.gestion');
        Route::get('/scientifique', function () {return view('pages.web.normes.scientifique');})->name('administration.scientifique');
    });
    /*
     * Articles
     */
    Route::prefix('/articles')->group(function () {
        Route::get('/list', [ArticleWebController::class, 'index']
        )->name('web.articles.list');
    });

    /*
     * Issues
     */
    Route::prefix('/issues')->group(function () {
        Route::get('/list', [IssueWebController::class, 'index']
        )->name('web.issues.list');
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
        /*
         * Users
         */

        Route::prefix('/users')->group(function () {
            Route::get('/list', [UserAdminController::class,  'index'])->name('admin.users.list');
        });
        /*
         * Account
         */
        Route::prefix('/account')->group(function () {
            Route::get('/settings', [UserAdminController::class, 'settings'])->name('admin.account.settings');
            Route::post('/password/update', [UserAdminController::class, 'updatePassword'])->name('admin.account.update.password');
        });
    });
    /*
     * Logout
     */
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
