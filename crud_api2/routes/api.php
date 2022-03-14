<?php

use App\Models\uZer;
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

Route::get('uZers', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return uZer::all();
});

Route::get('uZer/{id}', function($id) {
    return uZer::find($id);
});

Route::post('uZers', function(Request $request) {
    return uZer::create($request->all);
});

Route::put('uZers/{id}', function(Request $request, $id) {
    $uZer = uZer::findOrFail($id);
    $uZer->update($request->all());

    return $uZer;
});

Route::delete('uZers/{id}', function($id) {
    uZer::find($id)->delete();

    return 204;
});

Route::get('uZers', 'uZerController@index');
Route::get('uZers/{uZer}', 'uZerController@show');
Route::post('uZers', 'uZerController@store');
Route::put('uZers/{uZer}', 'uZerController@update');
Route::delete('uZers/{uZer}', 'uZerController@delete');
