<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){

        $tickets = Ticket::all();

        return view('tickets.index',compact('tickets'));
    }

    public function create(){
        return view('tickets.create');
    }

    public function storeTicket(){

        $ticket = new Ticket();

        $ticket->source = request('source');
        $ticket->destination = request('destination');
        $ticket->date = request('date');
        $ticket->class = request('class');
        $ticket->adults = request('adults');
        $ticket->children = request('children');
        $ticket->save();

        return redirect('/devices');

    }

}
