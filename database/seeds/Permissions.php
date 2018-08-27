<?php

use Illuminate\Database\Seeder;

class Permissions extends Seeder
{

	
    public $perms = array(
        ['name'=>'self:read'],
        ['name'=>'user:read'],
        ['name'=>'user:edit'],
        ['name'=>'user:delete'],
        ['name'=>'users:read'],
        ['name'=>'users:create'],
        ['name'=>'users:edit'],
        ['name'=>'users:delete'],
        ['name'=>'roles:read'],
        ['name'=>'roles:create'],
        ['name'=>'roles:edit'],
        ['name'=>'roles:delete'],
        ['name'=>'permissions:read'],
        ['name'=>'permissions:create'],
        ['name'=>'permissions:edit'],
        ['name'=>'permissions:delete'],
        ['name'=>'users_roles:read'],
        ['name'=>'users_roles:create'],
        ['name'=>'users_roles:edit'],
        ['name'=>'users_roles:delete'],
        ['name'=>'roles_permissions:read'],
        ['name'=>'roles_permissions:create'],
        ['name'=>'roles_permissions:edit'],
        ['name'=>'roles_permissions:delete'],
        ['name'=>'deals:read'],
        ['name'=>'deals:create'],
        ['name'=>'deals:edit'],
        ['name'=>'deals:delete'],
        ['name'=>'events:read']
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->insert($this->perms);
    }
}
