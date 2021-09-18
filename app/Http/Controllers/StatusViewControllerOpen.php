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
    // retorna o ticket number, age e title dos tickets new +20
    public function getStatusViewNew2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=new&States=open&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(20)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
     // retorna o ticket number, age e title dos tickets new +40
     public function getStatusViewNew3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=new&States=open&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(40)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
     // retorna o ticket number, age e title dos tickets new +60
     public function getStatusViewNew4(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=new&States=open&States=pending reminder');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(60)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }


    //                           STATUS CLOSE
    public function getStatusViewClose(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=closed successful&States=closed unsuccessful');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(0)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
    public function getStatusViewClose2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=closed successful&States=closed unsuccessful');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(20)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
    public function getStatusViewClose3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=closed successful&States=closed unsuccessful');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(40)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
    public function getStatusViewClose4(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&States=closed successful&States=closed unsuccessful');
        $res = $response->json();
        $tickets=collect($res['TicketID'])->skip(60)->take(20)->map(function($id){
            $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket/'.$id.'?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&AllArticles=1&DynamicFields=1');
            $ticket = $response->json()['Ticket'][0];
            return [
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
}
