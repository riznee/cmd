<?php

namespace App\Http\Controllers;

 use App\Repositries\UserRepository;

class UserRoleController extends Controller {

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
        // $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function store($id , $role_id)
    {
        try{
            $this->repository->setRole($id, $role_id);
            return redirect()->back();
        }
        catch (\Exception $exeption)
        {
            return redirect()->back()->withError($exeption->getMessage())->withInput();
        }
    }

    public function destroy($id, $role_id)
    {
       
        try{
            $this->repository->removeRole($id, $role_id);
            return redirect()->back();
        }
        catch (\Exception $exeption)
        {
            return redirect()->back()->withError($exeption->getMessage())->withInput();
        }
    }
    

}