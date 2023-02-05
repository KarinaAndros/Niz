<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    //return registration view
    public function create(){
        return view('user.registration');
    }

    //add new user
    public function store(Request $request){
        $user = new User();
        $user->addUser($request);
        return redirect()->back();
    }



}
