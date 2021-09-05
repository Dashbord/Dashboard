<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class StatusViewControllerOpen extends Controller
{
    // retorna o ticket number, age e title dos tickets new
    public function getStatusViewNew(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=new&States=open&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'Title' => $ticket ['Title'],                
                'Created' => $ticket['Created'],
                'TicketNumber' => $ticket['TicketNumber'],
                'Owner' => $ticket['Owner'],
                'CustomerUserID' => $ticket['CustomerUserID'],
                'Priority' => $ticket['Priority'],
                'Changed' => $ticket['Changed'],
                'Lock' => $ticket['Lock'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],
            ];
        });
        return $tickets;
    }
    public function getStatusViewClose(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=closed successful&States=closed unsuccessful');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'Title' => $ticket ['Title'],                
                'Created' => $ticket['Created'],
                'TicketNumber' => $ticket['TicketNumber'],
                'Owner' => $ticket['Owner'],
                'CustomerUserID' => $ticket['CustomerUserID'],
                'Priority' => $ticket['Priority'],
                'Changed' => $ticket['Changed'],
                'Lock' => $ticket['Lock'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],
            ];
        });
        return $tickets;
    }
}
