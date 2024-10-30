<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Mechanics\MechanicsController;
use App\Http\Controllers\Api\Services\ServicesController;
use App\Http\Controllers\Api\ServiceTypes\ServiceTypesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*
 * Routes to generate the Sanctum token 
 */
Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');    
});

Route::middleware('auth:sanctum')->group(function () { 

    // CRUD routes for mechanics
    Route::match(['get', 'post', 'put', 'delete'], '/mechanics/{id?}', [MechanicsController::class, 'handle']);

    // CRUD routes for services
    Route::match(['get', 'post', 'put', 'delete'], '/services/{id?}', [ServicesController::class, 'handle']);

    // CRUD routes for service types
    Route::match(['get', 'post', 'put', 'delete'], '/serviceTypes/{id?}', [ServiceTypesController::class, 'handle']);

});
