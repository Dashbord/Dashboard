<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\StatusViewControllerOpen;
use App\Http\Controllers\QueueViewController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SeachController;
use App\Http\Controllers\CallController;
use Illuminate\Support\Facades\Auth;

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
// Details
Route::get('/details/{id}',[DetailsController::class,'getId'])->name('details.getId');

// search
Route::get('/search1',[SeachController::class,'getallTickets'])->name('SeachController.getallTickets');
// Rotas tickets
Route::get('/ticket2',[TicketController::class,'index'])->name('ticket.getAllTicketsNew2');
Route::get('/ticket3',[TicketController::class,'index'])->name('ticket.getAllTicketsNew3');
// Route::get('/ticket/{state}',[TicketController::class,'getState'])->name('ticket.getState');
// Route::get('/ticket/{QueueIDs}/{state}',[TicketController::class,'getQueueStatee'])->name('ticket.getQueueStatee');

Route::get('/ticket',[TicketController::class,'index'])->name('ticket.getAllTicketsNew');
Route::get('/queueSate/{queue}/{state_type}',[TicketController::class,'getQueueState']);
Route::get('/queueTotal/{queue}',[TicketController::class,'getQueueTotal']);
Route::get('/queues',[TicketController::class,'getQueues']);
Route::get('/stateTypes',[TicketController::class,'getStateTypes']);
Route::get('/calls',[CallController::class,'index'])->name('call.id');
Route::get('/ResolutionScore',[TicketController::class,'ResolutionScore'])->name('ticket.ResolutionScore');
Route::get('/TicketQueue/{state_type}',[TicketController::class,'TicketQueue'])->name('ticket.TicketQueue');
Route::get('/satisfaction_score',[CallController::class,'satisfaction_score'])->name('call.satisfaction_score');
Route::get('/duration',[CallController::class,'duration'])->name('call.duration');
Route::get('/somaDuration',[CallController::class,'somaDuration'])->name('call.somad');
Route::get('/somaReplyTime',[CallController::class,'somaReplyTime'])->name('call.somar');

//Status view
Route::get('/ticketOpen',[StatusViewControllerOpen::class,'getStatusViewNew'])->name('ticket.getStatusViewNew');
Route::get('/ticketOpen2',[StatusViewControllerOpen::class,'getStatusViewNew2'])->name('ticket.getStatusViewNew2');
Route::get('/ticketOpen3',[StatusViewControllerOpen::class,'getStatusViewNew3'])->name('ticket.getStatusViewNew3');
Route::get('/ticketOpen4',[StatusViewControllerOpen::class,'getStatusViewNew4'])->name('ticket.getStatusViewNew4');

//Status view close
Route::get('/ticketClose',[StatusViewControllerOpen::class,'getStatusViewClose'])->name('ticket.getStatusViewClose');
Route::get('/ticketClose2',[StatusViewControllerOpen::class,'getStatusViewClose2'])->name('ticket.getStatusViewClose2');
Route::get('/ticketClose3',[StatusViewControllerOpen::class,'getStatusViewClose3'])->name('ticket.getStatusViewClose3');
Route::get('/ticketClose4',[StatusViewControllerOpen::class,'getStatusViewClose4'])->name('ticket.getStatusViewClose4');

//Queue view
Route::get('/ticketRaw',[QueueViewController::class,'getRaw'])->name('ticket.getRaw');
Route::get('/ticketRaw2',[QueueViewController::class,'getRaw2'])->name('ticket.getRaw2');
Route::get('/ticketRaw3',[QueueViewController::class,'getRaw3'])->name('ticket.getRaw3');

Route::get('/ticketJunk',[QueueViewController::class,'getJunk'])->name('ticket.getJunk');
Route::get('/ticketJunk2',[QueueViewController::class,'getJunk2'])->name('ticket.getJunk2');
Route::get('/ticketJunk3',[QueueViewController::class,'getJunk3'])->name('ticket.getJunk3');

Route::get('/ticketComunicações',[QueueViewController::class,'getComunicações'])->name('ticket.getComunicações');
Route::get('/ticketComunicações2',[QueueViewController::class,'getComunicações2'])->name('ticket.getComunicações2');
Route::get('/ticketComunicações3',[QueueViewController::class,'getComunicações3'])->name('ticket.getComunicações3');

Route::get('/ticketServiceDesk',[QueueViewController::class,'getServiceDesk'])->name('ticket.getServiceDesk');
Route::get('/ticketServiceDesk2',[QueueViewController::class,'getServiceDesk2'])->name('ticket.getServiceDesk2');
Route::get('/ticketServiceDesk3',[QueueViewController::class,'getServiceDesk3'])->name('ticket.getServiceDesk3');

Route::get('/Segurança',[QueueViewController::class,'getSegurança'])->name('ticket.getSegurança');
Route::get('/Segurança2',[QueueViewController::class,'getSegurança2'])->name('ticket.getSegurança2');
Route::get('/Segurança3',[QueueViewController::class,'getSegurança3'])->name('ticket.getSegurança3');

Route::get('/AdministraçãodeSistemas',[QueueViewController::class,'getAdministraçãodeSistemas'])->name('ticket.getAdministraçãodeSistemas');
Route::get('/AdministraçãodeSistemas2',[QueueViewController::class,'getAdministraçãodeSistemas2'])->name('ticket.getAdministraçãodeSistemas2');
Route::get('/AdministraçãodeSistemas3',[QueueViewController::class,'getAdministraçãodeSistemas3'])->name('ticket.getAdministraçãodeSistemas3');

Route::get('/CORE',[QueueViewController::class,'getCORE'])->name('ticket.getCORE');
Route::get('/CORE2',[QueueViewController::class,'getCORE2'])->name('ticket.getCORE2');
Route::get('/CORE3',[QueueViewController::class,'getCORE3'])->name('ticket.getCORE3');

Route::get('/SuporteInformático',[QueueViewController::class,'getSuporteInformático'])->name('ticket.getSuporteInformático');
Route::get('/SuporteInformático2',[QueueViewController::class,'getSuporteInformático2'])->name('ticket.getSuporteInformático2');
Route::get('/SuporteInformático3',[QueueViewController::class,'getSuporteInformático3'])->name('ticket.getSuporteInformático3');

Route::get('/Helpdesk',[QueueViewController::class,'getHelpdesk'])->name('ticket.getHelpdesk');
Route::get('/Helpdesk2',[QueueViewController::class,'getHelpdesk2'])->name('ticket.getHelpdesk2');
Route::get('/Helpdesk3',[QueueViewController::class,'getHelpdesk3'])->name('ticket.getHelpdesk3');

Route::get('/Monitorização',[QueueViewController::class,'getMonitorização'])->name('ticket.getMonitorização');
Route::get('/Monitorização2',[QueueViewController::class,'getMonitorização2'])->name('ticket.getMonitorização2');
Route::get('/Monitorização3',[QueueViewController::class,'getMonitorização3'])->name('ticket.getMonitorização3');

Route::get('/Serviços',[QueueViewController::class,'getServiços'])->name('ticket.getServiços');
Route::get('/Serviços2',[QueueViewController::class,'getServiços2'])->name('ticket.getServiços2');
Route::get('/Serviços3',[QueueViewController::class,'getServiços3'])->name('ticket.getServiços3');


Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::resource('/users',UserController::class);
    
});



//Pagina inicial
Route::get('/', function () {
    if (Auth::check()) {
     return view('dashboard');
    }
    return view('auth/login');
});

// rotas autenticação
Route::get('register', [RegisteredUserController::class, 'create']);


// Rotas calendario
Route::get('/full-calender', [FullCalenderController::class, 'index']);
Route::post('/full-calender/action', [FullCalenderController::class, 'action']);

require __DIR__.'/auth.php';

Route::get('{any}', function(){
    return view('dashboard');
})
    ->where('any', '.*')
    ->middleware('auth')
    ->name('dashboard');


