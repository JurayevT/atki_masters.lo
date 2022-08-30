<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\SiteController;
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

// -----   for admin   -----
Auth::routes();

Route::get('admin', function (){
    return redirect()->route('ad.homeAdmin');
});

Route::prefix('ad')->name('ad.')->group(function () {
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homeAdmin');
    Route::group(['middleware' => ['auth:web']], function() {

        Route::get('/news', [NewsController::class, 'indexAdmin'])->name('news.index');
        Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('news.store');
        Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
        Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
        Route::put('/news/edit/{id}', [NewsController::class, 'update'])->name('news.update');
        Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    });
});


// -----   for user   -----

    Route::get('/', [SiteController::class, 'index'])->name('home');
    Route::get('/about', [SiteController::class, 'about'])->name('about');
   

