<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function check_availability(Request $req)
    {
        $req->validate(['source'=>'required | alpha',
                        'destination'=>'required | alpha',
                        'date'=>'required | date'
                        ]);

    }
}
