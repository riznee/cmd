<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositries\RoleRepository;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;


class RoleController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'roles';

    public $headers=array( 
        array('title'=>'Name ', 'value'=>'name'),
        array('title'=>'Guard Name ', 'value'=>'guard_name'),     
        array ( 'title'=>'Created At', 'value' =>'created_at'),
        array ( 'title'=>'Updated At', 'value' =>'updated_at'),
    );

    public function __construct(RoleRepository $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function index(Request $request)
    {
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $roles = $this->repository->getRoles();
        $action = true;
        $data = array('data'=> "not null");

        return view('roles.index', compact('headers','roles','permisson','action','data'));
     
    }

    public function create()
    {
        $permission = $this->repository->getPermission();
        return view('roles.create', compact('permission'));
    }

    public function store(StoreRoleRequest $request)
    {
        try{
            $data = $this->repository->store($request);
            return redirect()->route('roles.index')->with('success', 'Role created successfully');
            
        } catch (\Exception $exeption){            
            return redirect()->route('roles.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

    public function show($id)
    {
        $role =  $this->repository->getItem($id);
        $rolePermissions = $this->repository->getRolePermssion();
        return view('roles.show', compact('role', 'rolePermissions'));
    }

    public function edit($id)
    {
        $role =  $this->repository->getItem($id);
        $permission =  $this->repository->getPermission();
        $rolePermissions = $this->repository->getAllRolePermission($id);
        return view('roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    public function update(UpdateRoleRequest $request, $id)
    {
   
        try {
            $role = $this->repository->update($request, $id);
            return redirect()->route('roles.index')->with('success', 'Role updated Successfull');
        } catch (\Exception $exeption) {
            return redirect()->route('roles.create')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $this->repository->destroy($id);
            return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
        } catch (\Exception $exeption) {
            return redirect()->route('proles.index')
                ->withError($exeption->getMessage())
                ->withInput();
        }
    }
}


