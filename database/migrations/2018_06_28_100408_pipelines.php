<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pipelines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pipelines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url_title')->default("default");
            $table->integer('order_nr')->default(1);
            $table->unsignedTinyInteger("active")->default(true);
            $table->unsignedTinyInteger("deal_probability")->nullable()->default(null);

            $table->timestamp("add_time");
            $table->timestamp("update_time")->default(null)->nullable();
            $table->unsignedTinyInteger('selected')->default(1);


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
        Schema::dropIfExists('pipelines');
    }
}
