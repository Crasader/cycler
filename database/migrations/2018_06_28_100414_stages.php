<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger("pipeline_id");
            $table->foreign('pipeline_id','stages_pipeline_id')->references('id')->on('pipelines');

            
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('order_nr')->default(1);
            
            $table->timestamps();


            $table->engine = 'MyISAM';
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('stages', function ($table) {
            $table->dropForeign('stages_pipeline_id');
        });

        Schema::dropIfExists('stages');
    }
}
