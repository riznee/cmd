<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'articles-store',
            'articles-index', 
            'articles-create',
            'articles-show',
            'articles-update',
            'articles-destroy',
            'articles-edit',
            'articles-publish',
            'articles-unpublish', 
            'categories-store',
            'categories-index',
            'categories-create',
            'categories-show',
            'categories-update',
            'categories-destroy ',
            'categories-edit',
            'upload',
            'pages-index',
            'pages-store',
            'pages-create',
            'pages-update',
            'pages-show',
            'pages-destroy',
            'pages-edit',
            'settings-store',
            'settings-index',
            'settings-create',
            'settings-show',
            'settings-destroy',
            'settings-update',
            'settings-edit',
            'users-index',      
            'users-store',        
            'users-create',      
            'users-show',     
            'users-update',      
            'users-destroy',     
            'users-edit',
            
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
