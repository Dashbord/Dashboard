<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;



class DetailsController extends Controller
{

    // retorna os tickets dependendo do parametro state que pode ser "new" ou "closed successful"
    public function getId($id){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
        $ticket = $response->json()['Ticket'][0];
        return [
            'TicketID' => $ticket['TicketID'],
            'Title' => $ticket ['Title'],                
            'Created' => $ticket['Created'],
            'TicketNumber' => $ticket['TicketNumber'],
            'Owner' => $ticket['Owner'],
            'Priority' => $ticket['Priority'],
            'Changed' => $ticket['Changed'],
            'Lock' => $ticket['Lock'],
            'StateType' => $ticket['StateType'],
            'Queue' => $ticket['Queue'],
        ];
    } 
}