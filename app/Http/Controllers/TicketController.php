<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{

    public function show_availability(Request $r)
    {
        $r->validate([
            'source'=>"required | String",
            'destination'=>"required | String",
            'date'=>"required | date",
            'adults'=>"required | String",
        ]);

        $ticket = DB::table('tickets')
        ->insert([
            'source'=>$r->source,
            'destination'=>$r->destination,
            'date'=>$r->date,
            'adults'=>$r->adults,
            'children'=>$r->children
        ]);
        $op = DB::table('tickets')->get();


        return view('availibility', ['op' => $op]);
    }
}
