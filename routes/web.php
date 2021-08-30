<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/authenticated', function () {
    return true;
});
Route::post('/register', 'App\Http\Controllers\RegisterController@register');
Route::post('login', 'App\Http\Controllers\LoginController@login');
Route::post('/logout', 'App\Http\Controllers\LoginController@logout');

/*Route::get('register', [RegisterController::class, 'register']);
Route::get('login', [RegisterController::class, 'login']);*/
Route::get('/unauthenticated', function () {
    return response()->json(["message" ,"unauthenticated"]);
})->name('api.unauthenticated');

Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

Auth::routes();