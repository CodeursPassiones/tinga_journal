<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\IssueWebController;
use App\Http\Controllers\Web\ArticleWebController;
use App\Http\Controllers\Web\WebsiteWebController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\IssueAdminController;
use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\Admin\DisciplineAdminController;

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
        Route::get('/détails/{articleId}', [ArticleWebController::class, 'show']
        )->name('web.articles.show');
    });

    /*
     * Volumes
     */
    Route::prefix('/volumes')->group(function () {
        Route::get('/list', [IssueWebController::class, 'volumes']
        )->name('web.volumes.list');
    });
    /*
     * Issues
     */
    Route::prefix('/issues')->group(function () {
        Route::get('/list/{volumeID}', [IssueWebController::class, 'index']
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
            Route::post('/store', [UserAdminController::class,  'store'])->name('admin.users.store');
            Route::post('/update', [UserAdminController::class,  'update'])->name('admin.users.update');
        });

        /*
         * Discipline
         */

        Route::prefix('/disciplines')->group(function () {
            Route::get('/list', [DisciplineAdminController::class,  'index'])->name('admin.disciplines.list');
            Route::post('/store', [DisciplineAdminController::class,  'store'])->name('admin.disciplines.store');
            Route::post('/update', [DisciplineAdminController::class,  'update'])->name('admin.disciplines.update');
        });

        /*
         * Discipline
         */

        Route::prefix('/issues')->group(function () {
            Route::get('/list', [IssueAdminController::class,  'index'])->name('admin.issues.list');
            Route::post('/store', [IssueAdminController::class,  'store'])->name('admin.issues.store');
            Route::post('/update', [IssueAdminController::class,  'update'])->name('admin.issues.update');
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
