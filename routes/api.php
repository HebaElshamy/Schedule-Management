<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\ScheduleController;

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
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/subjects', [SubjectController::class, 'index']);
Route::get('/time-slots', [TimeSlotController::class, 'index']);
Route::get('/schedules', [ScheduleController::class, 'index']);
Route::post('/schedules/bulk', [ScheduleController::class, 'saveBulk']);
Route::post('/schedules/remove', [ScheduleController::class, 'remove']);

