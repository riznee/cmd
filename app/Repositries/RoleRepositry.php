<?php

namespace App\Repositries;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;


class RoleRepository extends BaseRepository
{

    public function __construct(Role $role, Permission $permission)
    {
        parent::__construct($role);
        $this->permission = $permission;
    }

    public function getRoles()
    {
        $data = $this->model->orderBy('id', 'DESC')->paginate($this->perpage);
        return $data;
    }
   
    public function getPermission()
    {
        $permission = $this->permission->get();
        return $permission;
    }

    public function store($request)
    {
        $role = $this->model->create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        return $role;
    }

    public function getRolePermssion($id)
    {
        $rolePermissions = $this->model->with('permissions')->where('id', $id)->get();
        return  $rolePermissions;
    }

    public function getAllRolePermission( $id)
    {
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return $rolePermissions;
    }

    public function update($request, $id)
    {
        $role = $this->model->findOrFail($id);
        $role->name = $request->input('name');
        $role->save();
        $role->syncPermissions($request->input('permission'));
        return $role;
    }

    public function destroy($id)
    {
        return DB::table("roles")->where('id', $id)->delete();

    }

    public function setPermissions($role_id, $permission_id)
    {
        $role=$this->model->findOrFail($role_id);
        $role->permissions()->attach($permission_id);
        $role->forgetCachedPermissions();
        $role->load('permissions');
        return $role; 
    }

    public function removePermissions($role_id, $permission_id)
    {
        $role=$this->model->findOrFail($role_id);
        $role->permissions()->detach($permission_id);
        $role->forgetCachedPermissions();
        $role->load('permissions');
        return $role;      
    }

}
