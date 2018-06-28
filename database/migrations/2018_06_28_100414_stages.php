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
            $table->integer('order_nr')->default(1);
            $table->string('name');
            $table->unsignedTinyInteger("active_flag")->default(1);
            $table->integer("deal_probability")->default(100);

            $table->unsignedInteger("pipeline_id");
            $table->foreign('pipeline_id','stages_pipeline_id')->references('id')->on('pipelines');

            $table->unsignedTinyInteger("rotten_flag")->default(0);
            $table->integer("rotten_days")->default(null)->nullable();
            $table->timestamp("add_time");
            $table->timestamp("update_time")->default(null)->nullable();
            $table->string('pipeline_name')->default(null)->nullable();


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
