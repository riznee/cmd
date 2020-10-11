<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositries\PageRepositry;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;


class RoleController extends Controller
{
    public $perpage = 5;
    public $permissonName = 'role';

    public function __construct(PageRepositry $repository)
    {
        $this->repository = $repository;
        $this->setPermission($this->permissonName);
        parent::__construct();
    }

    public function index(Request $request)
    {
        $roles = $this->repository->getRoles();
        return view('roles.index', compact('roles'))->with('i', ($request->input('page', 1) - 1) * 5);
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


