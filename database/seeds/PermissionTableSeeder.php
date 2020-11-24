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
            'pages-enable',
            'pages-disable',

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

            'pagelayouts-store',
            'pagelayouts-index',
            'pagelayouts-create',
            'pagelayouts-show',
            'pagelayouts-destroy',
            'pagelayouts-update',
            'pagelayouts-edit',


            'pagetypes-store',
            'pagetypes-index',
            'pagetypes-create',
            'pagetypes-show',
            'pagetypes-destroy',
            'pagetypes-update',
            'pagetypes-edit',

            'tax-store',
            'tax-index',
            'tax-create',
            'tax-show',
            'tax-destroy',
            'tax-update',
            'tax-edit',

            'attriibutes-store',
            'attriibutes-index',
            'attriibutes-create',
            'attriibutes-show',
            'attriibutes-destroy',
            'attriibutes-update',
            'attriibutes-edit',
            
            'contacts-store',
            'contacts-index',
            'contacts-create',
            'contacts-show',
            'contacts-destroy',
            'contacts-update',
            'contacts-edit',

            'banners-store',
            'banners-index',
            'banners-create',
            'banners-show',
            'banners-destroy',
            'banners-update',
            'banners-edit',

            'productcatergories-store',
            'productcatergories-index',
            'productcatergories-create',
            'productcatergories-show',
            'productcatergories-destroy',
            'productcatergories-update',
            'productcatergories-edit',

            
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
