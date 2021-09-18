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
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
    // retorna os parametros abaixo dos tickets  Raw +20
    public function getRaw2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=2');
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
    // retorna os parametros abaixo dos tickets  Raw +40
    public function getRaw3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=2');
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

    // retorna os parametros abaixo dos tickets  JUNK
    public function getJunk(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=3');
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
    // retorna os parametros abaixo dos tickets  JUNK
    public function getJunk2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=3');
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
    // retorna os parametros abaixo dos tickets  JUNK
    public function getJunk3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=3');
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

    // retorna os parametros abaixo dos tickets  Comunicações
    public function getComunicações(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=5');
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
    // retorna os parametros abaixo dos tickets  Comunicações
    public function getComunicações2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=5');
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
// retorna os parametros abaixo dos tickets  Comunicações
public function getComunicações3(){
    $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=5');
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
            'Queue' => $ticket['Queue'],        ];
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
                'TicketID' => $ticket['TicketID'],
                'Title' => $ticket ['Title'],                
                'TicketNumber' => $ticket['TicketNumber'],
                'Priority' => $ticket['Priority'],
                'StateType' => $ticket['StateType'],
                'Queue' => $ticket['Queue'],            ];
        });
        return $tickets;
    }
    // retorna os parametros abaixo dos tickets  Raw
    public function getServiceDesk2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=6');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getServiceDesk3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=6');
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

    // retorna os parametros abaixo dos tickets  Segurança
    public function getSegurança(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=7');
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
    // retorna os parametros abaixo dos tickets  Segurança
    public function getSegurança2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=7');
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
    // retorna os parametros abaixo dos tickets  Segurança
    public function getSegurança3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=7');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getAdministraçãodeSistemas(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=8');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getAdministraçãodeSistemas2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=8');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getAdministraçãodeSistemas3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=8');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getCORE(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=9');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getCORE2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=9');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getCORE3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=9');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getSuporteInformático(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=10');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getSuporteInformático2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=10');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getSuporteInformático3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=10');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getHelpdesk(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=11');
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

     // retorna os parametros abaixo dos tickets  Raw
     public function getHelpdesk2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=11');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getHelpdesk3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=11');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getMonitorização(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=12');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getMonitorização2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=12');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getMonitorização3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=12');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getServiços(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=13');
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

    // retorna os parametros abaixo dos tickets  Raw
    public function getServiços2(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=13');
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
    // retorna os parametros abaixo dos tickets  Raw
    public function getServiços3(){
        $response = Http::get('http://10.175.146.2/otrs/nph-genericinterface.pl/Webservice/GenericTicketConnectorREST/Ticket?UserLogin=sluis&Password=Szb6gwzEaEUAzsGj&QueueIDs=13');
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
}
