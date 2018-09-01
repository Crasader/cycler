<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{


    public $roles = array(
        ['id'=>1,'name' => 'admin','display_name'=>"Администратор", 'description'=>"Управление системными настройками"],
        ['id'=>2,'name' => 'manager','display_name'=>"Менеджер", 'description'=>"Менеджер-логист: детальная проработка логистики, расчёт стоимости, подготовка документации"],
        ['id'=>3,'name' => 'operator','display_name'=>"Оператор", 'description'=>"Оператор: первичная обработка звонков и заявок"]
    );


    public $perms = array(
        ['id'=>1,'name'=>'self:read'],
        ['id'=>2,'name'=>'user:read'],
        ['id'=>3,'name'=>'user:edit'],
        ['id'=>4,'name'=>'user:delete'],
        ['id'=>5,'name'=>'users:read'],
        ['id'=>6,'name'=>'users:create'],
        ['id'=>7,'name'=>'users:edit'],
        ['id'=>8,'name'=>'users:delete'],
        ['id'=>9,'name'=>'roles:read'],
        ['id'=>10,'name'=>'roles:create'],
        ['id'=>11,'name'=>'roles:edit'],
        ['id'=>12,'name'=>'roles:delete'],
        ['id'=>13,'name'=>'permissions:read'],
        ['id'=>14,'name'=>'permissions:create'],
        ['id'=>15,'name'=>'permissions:edit'],
        ['id'=>16,'name'=>'permissions:delete'],
        ['id'=>17,'name'=>'users_roles:read'],
        ['id'=>18,'name'=>'users_roles:create'],
        ['id'=>19,'name'=>'users_roles:edit'],
        ['id'=>20,'name'=>'users_roles:delete'],
        ['id'=>21,'name'=>'roles_permissions:read'],
        ['id'=>22,'name'=>'roles_permissions:create'],
        ['id'=>23,'name'=>'roles_permissions:edit'],
        ['id'=>24,'name'=>'roles_permissions:delete'],
        ['id'=>25,'name'=>'deals:read'],
        ['id'=>26,'name'=>'deals:create'],
        ['id'=>27,'name'=>'deals:edit'],
        ['id'=>28,'name'=>'deals:delete'],
        ['id'=>29,'name'=>'events:read']
    );


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert($this->roles);

        DB::table('permissions')->insert($this->perms);

        $admin_permissions=array();

        foreach ($this->perms as $p) {
           $admin_permissions[] = ['role_id'=>1,'permission_id'=>$p['id']]; 
        }

        DB::table('permission_role')->insert($admin_permissions);
    }
}
