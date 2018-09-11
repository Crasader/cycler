<?php

use Illuminate\Database\Seeder;

class Pipelines extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	
        $id = DB::table('pipelines')->insertGetId(
        	['name' => 'Грузоперевозка']
        );

        if($id){
        	DB::table('stages')->insert([
        		['name' => 'Первая стадия','order_nr'=>1,'pipeline_id'=>$id],
        		['name' => 'Стадия завершения','order_nr'=>2,'pipeline_id'=>$id]
        	]);
        }


        $id = DB::table('pipelines')->insertGetId(
        	['name' => 'Расчет стоимости']
        );

        if($id){
        	DB::table('stages')->insert([
        		['name' => 'Первая стадия','order_nr'=>1,'pipeline_id'=>$id],
        		['name' => 'Стадия завершения','order_nr'=>2,'pipeline_id'=>$id]
        	]);
        }
        
    }
}
