<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
// API Routes
/*
Route::group(['middleware' => ['api']], function () {
    Route::post('login', [AuthController::class, 'signin']);
    Route::post('register', [AuthController::class, 'signup']);
    Route::get('users', [UserController::class, 'getuser']);
});
*/

Route::get('users', [UserController::class, 'getuser']);
