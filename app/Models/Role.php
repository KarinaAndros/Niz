<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const MODERATOR = 2;
    public const AUTHUSER = 3;

    //function for assignment a role Moderator
    public function Moderator($user){
        $role_user = new role_user();
        $role_user->user_id = $user->id;
        $role_user->role_id = self::MODERATOR;
        $role_user->save();
    }

    //function for assignment a role AuthUser
    public function AuthUser($user){
        $role_user = new role_user();
        $role_user->user_id = $user->id;
        $role_user->role_id = self::AUTHUSER;
        $role_user->save();
    }
}
