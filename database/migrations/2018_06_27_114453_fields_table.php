<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->alterDelas();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }



    public function alterDelas(){


        Schema::table('deals',function ($table){
           
           $table->timestamp("dts_created");
           $table->timestamp("dts_updated")->nullable()->default(null);
           $table->timestamp("dts_canseled")->nullable()->default(null);
           $table->timestamp("dts_relized")->nullable()->default(null);
        });


        DB::table("fields_schema")->insert([
            [
                'table' => 'deals',
                'name' => 'id',
                'model_type'=>'Integer',
                'data_type'=>'int',
                'auto_increment'=>true,
                'key'=>'PRI',
                'title'=>'ID'
            ]
        ]);

        DB::table("fields_schema")->insert([
            [
                'table' => 'deals',
                'name' => 'dts_created',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
            ],

            [
                'table' => 'deals',
                'name' => 'dts_updated',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
            ],

            [
                'table' => 'deals',
                'name' => 'dts_canseled',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
            ],

            [
                'table' => 'deals',
                'name' => 'dts_relized',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
            ]
        ]);
    }
}
