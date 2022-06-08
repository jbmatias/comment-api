<?php

use App\Api\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('comment.')->group(function () {  
    Route::get('/comments', [CommentController::class, 'index'])->name('comments');    
    Route::post('/store', [CommentController::class, 'store'])->name('store');    
});