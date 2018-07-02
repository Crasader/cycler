<?php

use Illuminate\Database\Seeder;

class usersettings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where(['name'=>'default','email'=>'admin@admin.ru'])->first();
        
        if(isset($user->id) && $user->id){
        	
        	DB::table('user_settings')->insert([
        		'user_id'=>$user->id,
        		'name'=>'ui',
        		'title'=>'Настройка вида'
        	]);
        }
        
    }
}
