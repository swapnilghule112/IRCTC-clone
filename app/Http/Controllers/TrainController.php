<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
    $trains = train::all();
    return view('trains.index',compact('trains'));
    }

    public function create(){
        return view('trains.create');
    }

    public function storeTrain(){

        $train = new train();

        $train->train_name = request('train_name');
        $train->number = request('train_number');
        $train->source = request('source');
        $train->destination = request('destination');
        $train->date = request('date');
        $train->time = request('time');
        $train->AC = request('AC');
        $train->Sleeper = request('Sleeper');


        $device->save();

        return redirect('/trains');

    }
}
