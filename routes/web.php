<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.home');
});

Route::name('admin.')->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('connecter', [HomeController::class, 'connecter'])->name('connecter');
    Route::get('error404', [HomeController::class, 'error404'])->name('error404');
    Route::get('blankpage', [HomeController::class, 'blankpage'])->name('blankpage');
    Route::get('loginpage', [HomeController::class, 'loginpage'])->name('loginpage');
    Route::get('registerpage', [HomeController::class, 'registerpage'])->name('registerpage');
    Route::get('forgotpasswordpage', [HomeController::class, 'forgotpasswordpage'])->name('forgotpasswordpage');
    Route::get('account', [HomeController::class, 'account'])->name('account');
    Route::get('lockscreen', [HomeController::class, 'lockscreen'])->name('lockscreen');
    Route::get('support', [HomeController::class, 'support'])->name('support');



    Route::resource('article', ArticleController::class);
    Route::resource('university', UniversityController::class);
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
