<?php
use App\Http\Controllers\SzakdogaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('szakdogas', [SzakdogaController::class, 'index']);
Route::get('szakdogas/{id}', [SzakdogaController::class, 'show']);
 Route::post('szakdogas', [SzakdogaController::class, 'store']);
 Route::put('szakdogas/{id}', [SzakdogaController::class, 'update']);
 Route::delete('szakdogas/{id}', [SzakdogaController::class, 'destroy']);
