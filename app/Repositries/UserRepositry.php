<?php

namespace App\Repositries;

use App\Models\User;
use App\Models\VerifyUser;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use DB;
use Hash;

class UserRepositry extends BaseRepositry
{

    public function __construct(User $user, Role $role,VerifyUser $verifyUser )
    {
        parent::__construct($user);
        $this->role = $role;
        $this->verifyUser= $verifyUser;
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

    


}
