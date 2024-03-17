<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::get('/ambot', [UserController::class, 'store']);

// Route::match(['get', 'put', 'patch', 'post'], '/ambot', function () {
//         return 'This route is for put, patch, and post http verb only';
// });

// Route::any( '/ambot', function () {
//     return 'This route is for put, patch, and post http verb only';
// });

Route::get( '/ambot', function (Request $request) {
    return $request->email . ' - '. $request->email;
});