<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Response;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname',
        'patronymic',
        'email',
        'login',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //validationData
    public function validationData($request){
        $validation = Validator::make($request,[
            'name' => 'required|min:3|max:50',
            'surname' => 'required|min:3|max:50',
            'patronymic' => 'nullable|min:3|max:50',
            'email' => 'required|email:rfc,dns|exists:users',
            'login' => 'required|min:3|max:50',
            'password' => 'required|min:3|max:100|confirmed',
            'img' => 'nullable|mime:jpg,png,bmp,jpeg,gif|file|max:1999',
        ]);
        if ($validation->fails()){
            return([
                'name_error' => $validation->errors()->first('name'),
                'surname_error' => $validation->errors()->first('surname'),
                'patronymic_error' => $validation->errors()->first('patronymic'),
                'email_error' => $validation->errors()->first('email'),
                'login_error' => $validation->errors()->first('login'),
                'password_error' => $validation->errors()->first('password'),
                'avatar_error' => $validation->errors()->first('img')
            ]
);
        }else{
            $this->addUser($request);
        }
    }

    //function for add user
    public function addUser($request){
        $path = " ";

        if($request->file('img')){
          $path = $request->file('img')->store('/img');
        }

        $this->name = $request->input('name');
        $this->surname = $request->input('surname');
        $this->patronymic = $request->input('patronymic');
        $this->email = $request->input('email');
        $this->login = $request->input('login');
        $this->password = md5($request->input('password'));
        $this->avatar = '/storage/'.$path;
        $this->save();

        $this->createToken($request->input('login'));

        $role = new Role();
        $role->AuthUser($this);
        return ('success');
    }


}
