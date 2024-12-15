<?php

use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'home' );
} );

Route::get( '/register', [
    RegisteredUserController::class,
    'create'
] );
Route::post( '/register', [ RegisteredUserController::class, 'store' ] );

Route::post( '/logout', [ SessionController::class, 'destroy' ] );
