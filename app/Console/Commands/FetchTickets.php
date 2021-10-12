<?php

namespace App\Console\Commands;

use App\Models\Ticket;
use Illuminate\Console\Command;
use  Illuminate\Support\Facades\Http;

class FetchTickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ticket:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->getAllTicketsNew();
        $this->getAllTicketsNew2();
        $this->getAllTicketsNew3();
        // $this->getState();
        // $this->getQueueStatee();
    }
    // retorna o ticket number, age e title dos tickets new
    public function getAllTicketsNew(){
        Ticket::truncate();
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
        $tickets->each(function($ticket){
            $t= new Ticket();
            $t-> ticket_id = $ticket["TicketID"];
            $t-> title = $ticket["Title"];
            $t-> age = $ticket["Age"];
            $t-> ticket_number = $ticket["TicketNumber"];
            $t-> save();
        });
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
        $tickets->each(function($ticket){
            $t= new Ticket();
            $t-> ticket_id = $ticket["TicketID"];
            $t-> title = $ticket["Title"];
            $t-> age = $ticket["Age"];
            $t-> ticket_number = $ticket["TicketNumber"];
            $t-> save();
        });
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
        $tickets->each(function($ticket){
            $t= new Ticket();
            $t-> ticket_id = $ticket["TicketID"];
            $t-> title = $ticket["Title"];
            $t-> age = $ticket["Age"];
            $t-> ticket_number = $ticket["TicketNumber"];
            $t-> save();
        });
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
