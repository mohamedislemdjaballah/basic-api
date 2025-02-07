<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// our first route is a get request to the /reviews endpoint

// Route::get('/reviews', function(){
//     return response()->json([
//         'message' => 'This is a get request'
//     ]);
// });

// we can develop to using a controller to handle the request
Route::get('/reviews', [ReviewController::class,'index']);