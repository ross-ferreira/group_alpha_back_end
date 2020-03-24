<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Images;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); 
});

Route::get("/startgame", [Images::class, "index"]);

Route::post("", [Images::class, "store"]);

Route::group(["prefix" => "{image}"], function () {
    
    Route::get("", [Images::class, "show"]);

    Route::put("", [Images::class, "update"]);
});