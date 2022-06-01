<?php

use Illuminate\Support\Facades\Route;

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

// The route we have created to show all events.
Route::get('/event', [\App\Http\Controllers\EventController::class, 'index']);

// The route we have created to show all events in selected date range.
Route::get('/eventRange', [\App\Http\Controllers\EventController::class, 'activeevents']);

// The route to show 1 event
Route::get('/event/{event}', [\App\Http\Controllers\EventController::class, 'show']);

//shows create event form
Route::get('/event/create/event', [\App\Http\Controllers\EventController::class, 'create']);

//saves the created event to the databse 
Route::post('/event/create/ev', [\App\Http\Controllers\EventController::class, 'store']); 

//shows edit event form
Route::get('/event/{event}/edit', [\App\Http\Controllers\EventController::class, 'edit']); 

//commits edited event to the database
Route::put('/event/{event}/edit', [\App\Http\Controllers\EventController::class, 'update']); 

//deletes event from the database 
Route::delete('/event/{event}', [\App\Http\Controllers\EventController::class, 'destroy']); 