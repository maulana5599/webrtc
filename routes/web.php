<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FriendController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/user-friend/{id}', [FriendController::class, 'connectedUser'])->name('user.friend');

Route::post('/send-message/{id}', [FriendController::class, 'sendMessage'])->name('send.message');

Route::get('/fetch-message/{id}', [FriendController::class, 'fetchMessage'])->name('fetch.message');

Route::get('/joinin-chat/{id}', [FriendController::class, 'joinChat'])->name('join.message');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
