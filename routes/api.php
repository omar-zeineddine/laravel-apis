<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssignmentApis;

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

Route::get('/palindrome', [AssignmentApis::class, 'isPalindrome']);
Route::get('/time', [AssignmentApis::class, 'timeSince']);
Route::get('/nomination', [AssignmentApis::class, 'randomName']);
Route::get('/beer', [AssignmentApis::class, 'brew']);
Route::get('/joke', [AssignmentApis::class, 'dadJoke']);
