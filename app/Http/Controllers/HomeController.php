<!-- @author: Swapnil Ghule -->

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function check_availability(Request $req)
    {
        $req->validate(['source'=>'required | alpha',
                        'destination'=>'required | alpha',
                        'date'=>'required | date'

                        ]);
        // print_r($req->input());
    }
}



