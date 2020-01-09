<?php

use Illuminate\Http\Request;

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

Route::middleware(['api.cors'])->group(function () {
    Route::get('/unauthenticated', function () {
        return response()->json(["error" => "Unauthenticated user!"], 401);
    })->name('unauthenticated');

    Route::get('/unauthorized', function () {
        return response()->json(["error" => "Unauthorized user!"], 403);
    })->name('unauthorized');

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
    Route::prefix('users')->group(function () {
        Route::get('/', 'UserController@getUsers')->name('get.users');
    });
    // Default 404 route for APIs, make sure to always keep this at the end of file.
    Route::any('/{any}', function () {
        return response()->json(["error" => "Not found!"], 404);
    })->where('any', '.*')->name('not.found');
});
