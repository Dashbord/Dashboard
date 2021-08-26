<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\TicketController;
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
// Rotas tickets
Route::get('/ticket',[TicketController::class,'getAllTickets'])->name('ticket.getallticket');
Route::get('/ticket/{queue}/{state}',[TicketController::class,'getAllType'])->name('ticket.getAllType');


Route::get('/', function () {
    if (Auth::check()) {
    return view('dashboard');
    }
    return view('auth/login');
});

// Rotas calendario
Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);


require __DIR__.'/auth.php';

Route::get('{any}', function(){
    return view('dashboard');
})
    ->where('any', '.*')
    ->middleware('auth')
    ->name('dashboard');


