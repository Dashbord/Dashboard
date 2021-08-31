<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    // retorna o id e Queue dos tickets
    // public function getAllTickets(){
    //     $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj');
    //     $res = $response->json();
    //     $ticketsAll=collect($res['TicketIDAll'])->skip(0)->take(10)->map(function($id){
    //         $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
    //         $ticketAll = $response->json()['TicketAll'][0];
    //         return [
    //             'id' => $ticketAll ['TicketIDAll'],                
    //             'queue' => $ticketAll['Queue'],
    //         ];
    //     });
    //     return $ticketsAll;
    // }

    // retorna o ticket number, age e title dos tickets new
    public function getAllTicketsNew(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=new');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(10)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'Title' => $ticket ['Title'],                
                'Created' => $ticket['Created'],
                'TicketNumber' => $ticket['TicketNumber'],
            ];
        });
        return $tickets;
    }
    

    // retorna os tickets dependendo do parametro state que pode ser "new" ou "closed successful"
    public function getState($state){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=pvinha&Password=sET4s7JyFBaDDmQa&States='.$state.'');       
        return $response->json();
    }
}
