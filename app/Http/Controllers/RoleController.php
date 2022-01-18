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
        return view('roles.create');
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
        $title="Roles";
        $headers = $this->headers;
        $permisson = $this->permissonName;
        $action = false;
        $data =  $this->repository->getRolePermssion($id);
        $permissionList = $this->repository->getPermission();
        // dd($permissionList);
        return view('roles.show', compact('headers','data','permisson','action', 'title','permissionList','id'));
    }

    public function edit($id)
    {
        $role =  $this->repository->getItem($id);
        return view('roles.edit', compact('role'));
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


