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
        ['id'=>1,'name'=>'read:self'],

        ['id'=>2,'name'=>'read:user'],
        ['id'=>3,'name'=>'edit:user'],
        ['id'=>4,'name'=>'remove:user'],

        ['id'=>5,'name'=>'read:users'],
        ['id'=>6,'name'=>'create:users'],
        ['id'=>7,'name'=>'edit:users'],
        ['id'=>8,'name'=>'remove:users'],

        ['id'=>9,'name'=>'read:roles'],
        ['id'=>10,'name'=>'create:roles'],
        ['id'=>11,'name'=>'edit:roles'],
        ['id'=>12,'name'=>'remove:roles'],

        ['id'=>13,'name'=>'read:permissions'],
        ['id'=>14,'name'=>'create:permissions'],
        ['id'=>15,'name'=>'edit:permissions'],
        ['id'=>16,'name'=>'remove:permissions'],

        ['id'=>17,'name'=>'read:users_roles'],
        ['id'=>18,'name'=>'create:users_roles'],
        ['id'=>19,'name'=>'edit:users_roles'],
        ['id'=>20,'name'=>'remove:users_roles'],

        ['id'=>21,'name'=>'read:roles_permissions'],
        ['id'=>22,'name'=>'create:roles_permissions'],
        ['id'=>23,'name'=>'edit:roles_permissions'],
        ['id'=>24,'name'=>'remove:roles_permissions'],
        
        ['id'=>25,'name'=>'read:deals'],
        ['id'=>26,'name'=>'create:deals'],
        ['id'=>27,'name'=>'edit:deals'],
        ['id'=>28,'name'=>'remove:deals'],

        ['id'=>29,'name'=>'read:events'],

        ['id'=>30,'name'=>'read:currencies'],
        ['id'=>31,'name'=>'create:currencies'],
        ['id'=>32,'name'=>'edit:currencies'],
        ['id'=>33,'name'=>'remove:currencies'],

        ['id'=>34,'name'=>'read:pipelines'],
        ['id'=>35,'name'=>'create:pipelines'],
        ['id'=>36,'name'=>'edit:pipelines'],
        ['id'=>37,'name'=>'remove:pipelines'],

        ['id'=>38,'name'=>'read:stages'],
        ['id'=>39,'name'=>'create:stages'],
        ['id'=>40,'name'=>'edit:stages'],
        ['id'=>41,'name'=>'remove:stages'],

        ['id'=>42,'name'=>'read:settings'],
        ['id'=>43,'name'=>'create:settings'],
        ['id'=>44,'name'=>'edit:settings'],
        ['id'=>45,'name'=>'remove:settings'],

        ['id'=>46,'name'=>'read:fields'],
        ['id'=>47,'name'=>'create:fields'],
        ['id'=>48,'name'=>'edit:fields'],
        ['id'=>49,'name'=>'remove:fields'],
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
