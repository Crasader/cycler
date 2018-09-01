<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        return true;
        $id = DB::table('users')->insertGetId([
            'name' => "default",
            'email' => 'admin@admin.ru',
            'password' => bcrypt('secret'),
        ]);



        if($id){
        
        	$role = DB::table('roles')->where('name', 'admin')->first();
        	if($role->id){
        		DB::table('role_user')->insert([
		        	['user_id' => $id,'role_id'=>$role->id]
        		]);
        	}

            $role = DB::table('roles')->where('name', 'manager')->first();
            if($role->id){
                DB::table('role_user')->insert([
                    ['user_id' => $id,'role_id'=>$role->id]
                ]);
            }
        	
        }

    }
}
