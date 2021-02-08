<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\DealerGroupController;

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

Route::get('/', function () {
    return view('welcome');
});
// Agent routes
Route::get('agent/{id}/dealers', [AgentController::class, 'dealers']);
Route::get('agent/{id}/dealer-groups', [AgentController::class, 'dealerGroups']);
// Dealer group routes
Route::get('dealer-group/{id}/agents', [DealerGroupController::class, 'agents']);
Route::get('dealer-group/{id}/dealers', [DealerGroupController::class, 'dealers']);
// Dealer routes
Route::get('dealer/{id}/agents', [DealerController::class, 'agents']);
Route::get('dealer/{id}/groups', [DealerController::class, 'groups']);
Route::get('dealers', [DealerController::class, 'index']);
Route::get('search', [DealerController::class, 'search']);