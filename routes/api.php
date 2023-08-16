<?php

// use App\Http\Controllers\Apis\V1\UserApiController;

use App\Http\Controllers\Api\V1\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',function(){
    return "hello";
});
Route::prefix('/v1')->group(function(){
    Route::get('/recycler',[UserApiController::class,'forRecycler']);
});
