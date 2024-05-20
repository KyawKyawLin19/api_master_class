<?php

use App\Http\Controllers\Api\V1\TicketController;
use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

// http://localhost:8080/api/tickets/{id}/edit
// http://localhost:8080/api/users/{id}/delete
// universal resource locator
// tickets
// users

Route::apiResource('tickets', TicketController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});