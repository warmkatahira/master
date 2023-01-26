<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\APIController;

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

// -+-+-+-+-+-+-+-+-+-+-+-+ ウェルカムページ -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(WelcomeController::class)->prefix('')->name('')->group(function(){
    Route::get('/', 'index')->name('index');
});

// -+-+-+-+-+-+-+-+-+-+-+-+ TOPページ -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(TopController::class)->prefix('top')->name('top.')->group(function(){
    Route::get('/', 'index')->name('index');
});

// -+-+-+-+-+-+-+-+-+-+-+-+ 権限 -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(RoleController::class)->prefix('role')->name('role.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('register', 'register_index')->name('register_index');
    Route::post('register', 'register')->name('register');
});

// -+-+-+-+-+-+-+-+-+-+-+-+ ユーザー -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(UserController::class)->prefix('user')->name('user.')->group(function(){
    Route::get('/', 'index')->name('index');
});

// -+-+-+-+-+-+-+-+-+-+-+-+ 拠点 -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(BaseController::class)->prefix('base')->name('base.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('register', 'register_index')->name('register_index');
    Route::post('register', 'register')->name('register');
});

// -+-+-+-+-+-+-+-+-+-+-+-+ 顧客 -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(CustomerController::class)->prefix('customer')->name('customer.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('register', 'register_index')->name('register_index');
    Route::post('register', 'register')->name('register');
});





// -+-+-+-+-+-+-+-+-+-+-+-+ API -+-+-+-+-+-+-+-+-+-+-+-+
Route::controller(APIController::class)->prefix('api')->name('api.')->group(function(){
    Route::get('zipcloud/{zip_code}', 'zipcloud');
});





/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
