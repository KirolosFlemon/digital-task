<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Task\FirstTaskController;
use App\Http\Controllers\Task\SecondTaskController;
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

Route::get('first_task',[FirstTaskController::class,'first_task']);
Route::get('second-task',[SecondTaskController::class,'second_task']);
Route::post('register',RegisterController::class);
Route::post('login',[LoginController::class,'login']);

Route::middleware('auth:api')->group(function(){
    Route::get('user', [LoginController::class,'userLogin']);
    Route::get('specificUser/{user}', [LoginController::class,'specificUser']);
    Route::get('all_users', [LoginController::class,'allUsers']);
    Route::post('update', [LoginController::class,'update']);
    Route::delete('delete/{user}', [LoginController::class,'destroy']);
});
