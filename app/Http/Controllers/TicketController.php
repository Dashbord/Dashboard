<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    public function index(){
        return Ticket::all();
    }
}