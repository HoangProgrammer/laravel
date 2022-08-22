<?php

use App\Http\Controllers\Api\commentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('comment/{product_id}',[commentController::class,'index']);
Route::post('comment',[commentController::class,'create']);
Route::get('pagination',[commentController::class,'pagination'])->name('Pagination');


