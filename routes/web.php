<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequestController;

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

Route::get('language/{locale}', [LanguageController::class, 'change_locale'])->name('locale.change');
Route::get('/', function () {
    return view('index');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/tour', function () {
    return view('tour');
});
// Route::get('/dashboard', function () {
//     return view('/admin/dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Route::get('/request/index', [RequestController::class, 'index']);

    Route::resource('requests', RequestController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
