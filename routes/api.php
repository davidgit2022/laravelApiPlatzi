<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::apiResource('v1/posts', PostV1::class)->only('show','index', 'destroy')->middleware('auth:sanctum');

Route::apiResource('v2/posts', PostV2::class)->only('show','index')->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
