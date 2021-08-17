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
    if (Auth::check()) {
        return view('dashboard');
    }
    return view('welcome');
});


//fullcalender
use App\Http\Controllers\FullCalenderController;
Route::get('fullcalendar',[FullCalenderController::class, 'index']);
Route::get('fullcalendar',[FullCalenderController::class, 'create']);
Route::get('fullcalendar',[FullCalenderController::class, 'update']);
Route::get('fullcalendar',[FullCalenderController::class, 'destroy']);

require __DIR__.'/auth.php';

Route::get('{any}', function(){
    return view('dashboard');
})
    ->where('any', '.*')
    ->middleware('auth')
    ->name('dashboard');



