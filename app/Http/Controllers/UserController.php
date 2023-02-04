<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //return registration view
    public function registration_form(){
        return view('user.registration');
    }
}
