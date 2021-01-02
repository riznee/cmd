<?php

namespace App\Http\Controllers;

use App\Repositries\RoleRepository;
 
class RolePermissionController extends Controller {

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
        // $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function store($id , $permission_id)
    {
        try{
            $this->repository->setPermissions($id, $permission_id);
            return redirect()->back();
        }
        catch (\Exception $exeption)
        {
            return redirect()->back()->withError($exeption->getMessage())->withInput();
        }
    }

    public function destroy($id, $permission_id)
    {
        try{
            $this->repository->removePermissions($id, $permission_id);
            return redirect()->back();
        }
        catch (\Exception $exeption)
        {
            return redirect()->back()->withError($exeption->getMessage())->withInput();
        }
    
    }
    

}