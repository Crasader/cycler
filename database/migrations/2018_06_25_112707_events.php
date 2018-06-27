<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table',64);
            $table->bigInteger('row_id')->unsigned();
            $table->text("fields");
            $table->bigInteger("user_id");
            $table->enum("action",['created','updated','deleted']);
            $table->timestamp("created");

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
       Schema::dropIfExists('events');
    }
}
