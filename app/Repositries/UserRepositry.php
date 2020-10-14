<?php

namespace App\Repositries;

use App\Models\User;
use App\Models\PasswordReset;
use App\Models\VerifyUser;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use DB;
use Hash;

class UserRepositry extends BaseRepositry
{

    public function __construct(User $user, Role $role,VerifyUser $verifyUser, PasswordReset $passwordReset )
    {
        parent::__construct($user);
        $this->role = $role;
        $this->verifyUser= $verifyUser;
        $this->passwordReset = $passwordReset;
    }

    public function getUsers()
    {
        $data = $this->model->orderBy('id', 'DESC')->paginate($this->perpage);
        return $data;
    }

    public function getRoles()
    {
        $data = $this->role->pluck('name', 'name')->all();
        return $data;
    }

    public function register($request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole('user');
        $verifyUser = $this->verifyUser->create([
            'user_id' => $user->id,
            'token' => Str::random(40)
        ]);
        return $user;
    }



    public function store($request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('role'));
        return $user;
    }

    public function getUserRole($id)
    {
        $user = $this->findOrFail($id);
        $userRole = $user->roles->pluck('name', 'name')->all();
        return $userRole;
    }

    public function update($request, $id)
    {
        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = array_except($input, array('password'));
        }

        $user = $this->findOrFail($id);
        $user->update($input);
        DB::table('model_has_role')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return $user;
    }

    public function verifyUser($token)
    {
        $verifyUser = $this->verifyUser->where('token',$token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
            }
                $status = true;
            
        }else{
            $status = false;
        }
        return $status;
    }

    public function resetRequest($request)
    {
        $input = $request->all();
        $email = $input['email'];
        $user = $this->findByemail($email);
        if(isset($user)){
            if($user == 'null'){
                $status = false;
                return $status;
            }
            else
            {      
                $reset =$this->passwordReset->where('email' , $user->email)->first();
                if(!isset($reset)){

                    $this->passwordReset->create([
                        'email'=> $user->email,
                        'token'=>Str::random(40),
                        'verified' => False,
                        ]);
                       
                }
                else
                {
                    $this->passwordReset->where('email', $user->email)
                        ->update([
                        'email' => $user->email,
                        'token' => Str::random(40),
                        'verified' => False,
                    ]);

                }
                return $user;
            }
        }
    }

    public function passwordResetVerificatio($token)
    {
        $token_verfication = $this->passwordReset->where('token',$token)->first();
        return $token_verfication;
    }

    public function getUserMail($token_verfication)
    {
        if(!isset($token_verfication->verified))
        {
            $status = "not-found";
            return $status;
        }
        else
        {
            if($token_verfication->verified == 1)
            {
                $status = "expired";
                return $status;
            }
            else if($token_verfication->verified == 0)
            {
                $user = $this->findByemail($token_verfication->email);          
                return $user;
            }
        }
    }

    public function findByemail($email)
    {
        $user = $this->model->where('email', $email)->first();  
        return $user;
    }

    public function resetPassword($user , $request)
    {
        $user->update(['password' => Hash::make($request->password)]);
        $this->passwordReset->where('email', $user->email)->update(['verified' => True]);
        return $user;

    }
       

}