<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [CharacterController::class, "getCharacters"]);

Route::get('/character', [CharacterController::class, "showSingleCharacter"]);

Route::get('search', function () {
    return view('search');
});

Route::any('/results', [CharacterController::class, "search"]);
