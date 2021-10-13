<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index(){
        return Ticket::all();
    }
    // retorna os tickets dependendo do parametro state e state_type
    public function getQueueState($queue,$state_type){
        return DB::table('tickets')->select('queue')->groupBy('queue')->where('queue',$queue)->where('state_type',$state_type)->count();
    }
}