<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\use;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;


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

Route::post('login', [UserController::class, 'login']);

Route::group(['prefix' => 'sports', 'middleware' => ['jwt.verify', 'role:admin']], function ($router){
    Route::post('', [SportController::class, 'store']);
    Route::get('', [SportController::class, 'index']);//->withoutMiddleware(['role:admin'])->can('read customers');
    Route::get('/{id}', [SportController::class, 'show']);
    Route::put('/{id}', [SportController::class, 'update']);
    Route::delete('/{id}', [SportController::class, 'destroy']);
});

Route::group(['prefix' => 'positions', 'middleware' => ['jwt.verify', 'role:admin']], function ($router){
    Route::post('', [PositionController::class, 'store']);
    Route::get('', [PositionController::class, 'index']);//->withoutMiddleware(['role:admin'])->can('read customers');
    Route::get('/{id}', [PositionController::class, 'show']);
    Route::put('/{id}', [PositionController::class, 'update']);
    Route::delete('/{id}', [PositionController::class, 'destroy']);
});

Route::group(['prefix' => 'trainers', 'middleware' => ['jwt.verify', 'role:admin']], function ($router){
    Route::post('', [TrainerController::class, 'store']);
    Route::get('', [TrainerController::class, 'index']);//->withoutMiddleware(['role:admin'])->can('read customers');
    Route::get('/{id}', [TrainerController::class, 'show']);
    Route::put('/{id}', [TrainerController::class, 'update']);
    Route::delete('/{id}', [TrainerController::class, 'destroy']);
});

Route::group(['prefix' => 'teams', 'middleware' => ['jwt.verify', 'role:admin']], function ($router){
    Route::post('', [TeamController::class, 'store']);
    Route::get('', [TeamController::class, 'index']);//->withoutMiddleware(['role:admin'])->can('read customers');
    Route::get('/{id}', [TeamController::class, 'show']);
    Route::put('/{id}', [TeamController::class, 'update']);
    Route::delete('/{id}', [TeamController::class, 'destroy']);
});

Route::group(['prefix' => 'playes', 'middleware' => ['jwt.verify', 'role:admin']], function ($router){
    Route::post('', [PlayerController::class, 'store']);
    Route::get('', [PlayerController::class, 'index']);//->withoutMiddleware(['role:admin'])->can('read customers');
    Route::get('/{id}', [PlayerController::class, 'show']);
    Route::put('/{id}', [PlayerController::class, 'update']);
    Route::delete('/{id}', [PlayerController::class, 'destroy']);
});



Route::group(['prefix' => 'teams', 'middleware' => ['jwt.verify', 'role:Trainer']], function ($router){
    Route::post('player', [PlayerController::class, 'create']);
    Route::get('player', [PlayerController::class, 'index']);
    Route::put('player/{id}', [PlayerController::class, 'update']);
    Route::get('player/{id}', [PlayerController::class, 'show']);
    Route::delete('player/{id}', [PlayerController::class, 'destroy']);

    Route::post('team', [TeamController::class, 'create']);
    Route::get('team', [TeamController::class, 'index']);
    Route::put('team/{id}', [TeamController::class, 'update']);
    Route::get('team/{id}', [TeamController::class, 'show']);
    Route::delete('team/{id}', [TeamController::class, 'destroy']);
   
});



