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
        	['name' => 'Грузоперевозка','order_nr'=>1]
        );

        if($id){
        	DB::table('stages')->insert([
        		['name' => 'Первая стадия','order_nr'=>1,'pipeline_id'=>$id,'pipeline_name'=>'Грузоперевозка'],
        		['name' => 'Стадия завершения','order_nr'=>2,'pipeline_id'=>$id,'pipeline_name'=>'Грузоперевозка']
        	]);
        }


        $id = DB::table('pipelines')->insertGetId(
        	['name' => 'Расчет стоимости','order_nr'=>2]
        );

        if($id){
        	DB::table('stages')->insert([
        		['name' => 'Первая стадия','order_nr'=>1,'pipeline_id'=>$id,'pipeline_name'=>'Расчет стоимости'],
        		['name' => 'Стадия завершения','order_nr'=>2,'pipeline_id'=>$id,'pipeline_name'=>'Расчет стоимости']
        	]);
        }
        
    }
}
