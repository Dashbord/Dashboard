<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StatusViewControllerOpen;
use App\Http\Controllers\QueueViewController;

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
// Route::get('/ticket',[TicketController::class,'getAllTickets'])->name('ticket.getAllTickets');
Route::get('/ticket',[TicketController::class,'getAllTicketsNew'])->name('ticket.getAllTicketsNew');
Route::get('/ticket/{state}',[TicketController::class,'getState'])->name('ticket.getState');
Route::get('/ticket/{QueueIDs}/{state}',[TicketController::class,'getQueueStatee'])->name('ticket.getQueueStatee');
//Status view
Route::get('/ticketOpen',[StatusViewControllerOpen::class,'getStatusViewNew'])->name('ticket.getStatusViewNew');
Route::get('/ticketOpen2',[StatusViewControllerOpen::class,'getStatusViewNew2'])->name('ticket.getStatusViewNew2');
Route::get('/ticketOpen3',[StatusViewControllerOpen::class,'getStatusViewNew3'])->name('ticket.getStatusViewNew3');
Route::get('/ticketOpen4',[StatusViewControllerOpen::class,'getStatusViewNew4'])->name('ticket.getStatusViewNew4');
//Status view close
Route::get('/ticketClose',[StatusViewControllerOpen::class,'getStatusViewClose'])->name('ticket.getStatusViewClose');
//Queue view
Route::get('/ticketRaw',[QueueViewController::class,'getRaw'])->name('ticket.getRaw');
Route::get('/ticketJunk',[QueueViewController::class,'getJunk'])->name('ticket.getJunk');
Route::get('/ticketComunicações',[QueueViewController::class,'getComunicações'])->name('ticket.getComunicações');
Route::get('/ticketServiceDesk',[QueueViewController::class,'getServiceDesk'])->name('ticket.getServiceDesk');
Route::get('/Segurança',[QueueViewController::class,'getSegurança'])->name('ticket.getSegurança');
Route::get('/AdministraçãodeSistemas',[QueueViewController::class,'getAdministraçãodeSistemas'])->name('ticket.getAdministraçãodeSistemas');
Route::get('/CORE',[QueueViewController::class,'getCORE'])->name('ticket.getCORE');
Route::get('/SuporteInformático',[QueueViewController::class,'getSuporteInformático'])->name('ticket.getSuporteInformático');
Route::get('/Helpdesk',[QueueViewController::class,'getHelpdesk'])->name('ticket.getHelpdesk');
Route::get('/Monitorização',[QueueViewController::class,'getMonitorização'])->name('ticket.getMonitorização');
Route::get('/Serviços',[QueueViewController::class,'getServiços'])->name('ticket.getServiços');



Route::get('/', function () {
    if (Auth::check()) {
    return view('dashboard');
    }
    return view('auth/login');
});

// Rotas calendario
Route::get('full-calender', [FullCalenderController::class, 'index']);
Route::post('full-calender/action', [FullCalenderController::class, 'action']);

Route::get('master', function (){
    return view('master');
});

require __DIR__.'/auth.php';

Route::get('{any}', function(){
    return view('dashboard');
})
    ->where('any', '.*')
    ->middleware('auth')
    ->name('dashboard');


