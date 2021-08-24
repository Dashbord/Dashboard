<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    public function getAllTickets(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj');
        return $response -> json();
    }
    
    public function getAllType($queue,$state){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=pvinha&Password=sET4s7JyFBaDDmQa&Queues='.$queue.'&States='.$state.'');
        return $response -> json();
    }
}
