<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/', function (Request $request) {
    return response()->json([
        'status' => true,
        'token' => "12345",
    ]);
});
