<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index($search){
        if($search=='*'){
            return Ticket::orderBy('changed','DESC')->paginate(20);
        }
        return Ticket::where('title','LIKE','%'.$search.'%')->orderBy('changed','DESC')->paginate(20);
    }
    // retorna os tickets dependendo do parametro state e state_type
    public function getQueueState($queue,$state_type){
        return DB::table('tickets')->select('queue')->groupBy('queue')->where('queue',$queue)->where('state_type',$state_type)->count();
    }
    public function ResolutionScore($queue2)
    {
        if($queue2 == 'total'){
            return [
                DB::table('tickets')->select('state_type')->where('state_type',"open")->get()->count(),
                DB::table('tickets')->select('state_type')->where('state_type',"closed")->get()->count(),
                DB::table('tickets')->select('state_type')->where('state_type',"new")->get()->count(),
                DB::table('tickets')->select('state_type')->where('state_type',"pending reminder")->get()->count(),
            ];
        }
        return [
            DB::table('tickets')->select('state_type')->where('queue',$queue2)->where('state_type',"open")->get()->count(),
            DB::table('tickets')->select('state_type')->where('queue',$queue2)->where('state_type',"closed")->get()->count(),
            DB::table('tickets')->select('state_type')->where('queue',$queue2)->where('state_type',"new")->get()->count(),
            DB::table('tickets')->select('state_type')->where('queue',$queue2)->where('state_type',"pending reminder")->get()->count(),

        ];
    }
    public function TicketQueue($state_type)
    {   
        return DB::table('tickets')->select('queue', DB::raw('count(*) as total'))->where('state_type',$state_type)->groupBy('queue')->get();
    }
    public function getQueueTotal($queue){
        return DB::table('tickets')->select('queue')->groupBy('queue')->where('queue',$queue)->count();
    }
    public function getQueues(){
        return DB::table('tickets')->select('queue')->groupBy('queue')->get()->pluck('queue');
    }
    public function getStateTypes(){
        return DB::table('tickets')->select('state_type')->groupBy('state_type')->get()->pluck('state_type');
    }
    public function getID($ticket_id){
        return DB::table('tickets')->select('*')->where('ticket_id',$ticket_id)->get()->first();
    }
}