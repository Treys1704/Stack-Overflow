<?php

use App\Http\Controllers\DiscussionsController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('discussions', DiscussionsController::class);

Route::resource('discussions/{discussion}/replies', \App\Http\Controllers\RepliesController::class);

Route::post('discussions/{discussion}/replies/{reply}/mark-as-best-reply', [DiscussionsController::class, 'reply'])->name('discussions.best-reply');

Route::group(['middleware' => 'auth'], function(){
    Route::resource('channels', \App\Http\Controllers\ChannelsController::class);
});

Route::get('/reply/like/{id}', [App\Http\Controllers\LikeRepliesController::class, 'like'])->name('reply.like');

Route::get('/reply/unlike/{id}', [App\Http\Controllers\LikeRepliesController::class, 'unlike'])->name('reply.unlike');

Route::get('channel/{slug}', [App\Http\Controllers\DiscussionsController::class, 'channel'])->name('channel');



