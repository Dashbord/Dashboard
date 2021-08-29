<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    public function getAllTickets(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(10)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=pvinha&Password=sET4s7JyFBaDDmQa&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'id' => $ticket ['TicketID'],
                'queue' => $ticket['Queue'],
            ];
        });
        return $tickets;
    }
    
    public function getAllType($queue,$state){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=pvinha&Password=sET4s7JyFBaDDmQa&Queues='.$queue.'&States='.$state.'');
        return $response->json();
    }
}
