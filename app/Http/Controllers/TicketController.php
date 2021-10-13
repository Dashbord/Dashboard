<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Http;
use function PHPUnit\Framework\countOf;

class TicketController extends Controller
{
    public function index(){
        return Ticket::all();
    }
    // retorna os tickets dependendo do parametro state e state_type
    public function getQueueState(Ticket $queue,Ticket $state_type){
        return DB::table('ticket')->select('queue')->groupBy('queue')->where($queue->queue,$state_type->state_type)->count();
    }
}