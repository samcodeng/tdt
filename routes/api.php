<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RouteController;

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
Route::post('/kih/support',[RouteController::class,'support']);
Route::post('/kih/join',[RouteController::class,'join']);
Route::get('/kih/run',function(){
    $exitCode = Artisan::call('queue:work --sansdaemon --tries=3');
});

Route::get('/kih/verifyMonthlyTransaction/{reference}',[RouteController::class,'verifyMonthlyTransaction']);

Route::post('/subscribe','SubscribeController@index');