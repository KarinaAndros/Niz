<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{

    //return registration view
    public function create(){
        $users = User::all();
        return view('user.registration', ['users' => $users]);
    }

    //add new user
    public function store(){
        $user = new User();

        if ($user->validationData(\Request()->all()) != 'success'){
            return response()->json($user->validationData(\Request()->all()), 400);
        }
        else{
            return response()->json('GoodJob');
        }
    }
}
