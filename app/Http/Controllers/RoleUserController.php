<?php

namespace App\Http\Controllers;

 
class RoleUsernController extends Controller {

    public function __construct()
    {
        $this->repository = $repository;
        // $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function store($id , $permission_id)
    {
       
    }

    public function destroy($id, $permission_id)
    {
       
    
    }
    

}