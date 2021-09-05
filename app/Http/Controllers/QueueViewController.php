<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

    class QueueViewController extends Controller
{
    // retorna os parametros abaixo dos tickets  Raw
    public function getRaw(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=2');
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

    // retorna os parametros abaixo dos tickets  JUNK
    public function getJunk(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=3');
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

    // retorna os parametros abaixo dos tickets  Comunicações
    public function getComunicações(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=5');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getServiceDesk(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=6');
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

    // retorna os parametros abaixo dos tickets  Segurança
    public function getSegurança(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=7');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getAdministraçãodeSistemas(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=8');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getCORE(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=9');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getSuporteInformático(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=10');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getHelpdesk(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=11');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getMonitorização(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=12');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getServiços(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=13');
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
