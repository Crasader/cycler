<?php

use Illuminate\Database\Seeder;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	['name' => 'admin','display_name'=>"Администратор", 'description'=>"Управление системными настройками"],
        	['name' => 'manager','display_name'=>"Менеджер", 'description'=>"Менеджер-логист: детальная проработка логистики, расчёт стоимости, подготовка документации"],
        	['name' => 'operator','display_name'=>"Оператор", 'description'=>"Оператор: первичная обработка звонков и заявок"]
        ]);
    }
}
