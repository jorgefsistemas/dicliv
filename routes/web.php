<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/opinion', function () {
        return view('opinion');
    })->name('opinion');
    Route::resource('/opinion', OpinionController::class);
    // Route::get('opinionnew', Opinions::class)->name('opinionnew');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    Route::prefix('projects')->group(function () {
    Route::get('apiwithoutkey', [OpinionController::class, 'apiWithoutKey'])->name('apiWithoutKey');
    Route::get('apiwithkey', [OpinionController::class, 'apiWithKey'])->name('apiWithKey');
    Route::get('posts/store', [OpinionController::class, 'apistore']);
    Route::get('posts', [OpinionController::class, 'apiindex']);

});

});

