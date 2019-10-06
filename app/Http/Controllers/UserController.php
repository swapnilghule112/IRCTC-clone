<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function check_availability(Request $req)
    {
        print_r($req->input());
    }
}
