<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class SeachController extends Controller
{
    public function getallTickets(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(100)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],
            ];
        });
        return $tickets;
    }
}