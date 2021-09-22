<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class TicketController extends Controller
{

    //ver se isto funciona
    public function getAllQueues(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj');
        $res = $response->json();
        $count =count($response);
        dd($count);
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


    // retorna o ticket number, age e title dos tickets new
    public function getAllTicketsNew(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(10)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];           
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'Age' => $ticket['Age'],
                'TicketNumber' => $ticket['TicketNumber'],
            ];
        });
        return $tickets;
    }
     // retorna o ticket number, age e title dos tickets new
     public function getAllTicketsNew2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(10)->take(10)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];           
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'Age' => $ticket['Age'],
                'TicketNumber' => $ticket['TicketNumber'],
            ];
        });
        return $tickets;
    }
     // retorna o ticket number, age e title dos tickets new
     public function getAllTicketsNew3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(20)->take(10)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];           
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'Age' => $ticket['Age'],
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
    // retorna os tickets dependendo do parametro state e QueueIDs
    public function getQueueStatee($QueueIDs,$state){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs='.$QueueIDs.'&States='.$state.'');       
        return $response->json();
    }
}