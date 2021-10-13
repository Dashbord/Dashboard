<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Http;
use function PHPUnit\Framework\countOf;

class TicketController extends Controller
{
    public function index(){
        return Ticket::all();
    }
    // retorna os tickets dependendo do parametro state e QueueIDs
    public function getQueueStatee($QueueIDs,$state){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs='.$QueueIDs.'&States='.$state.'');       
        return $response->json();
    }
}