<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FileController;
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


Route::get("data", [dummyApi::class, 'getData']);

Route::get("list", [EmployeeController::class, 'list']);

Route::post("add", [EmployeeController::class, 'add']);

Route::put("update", [EmployeeController::class, 'update']);

Route::delete("delete/{id}", [EmployeeController::class, 'delete']);

Route::get("search/{name}", [EmployeeController::class, 'search']);

Route::post("save", [EmployeeController::class, 'testData']);

Route::apiResource("member", MemberController::class);

Route::post("upload", [FileController::class, 'upload']);

