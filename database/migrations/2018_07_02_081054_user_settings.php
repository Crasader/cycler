<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id','user_settings_fk_user_id')->references('id')->on('users');

            $table->string('name');
            $table->string('title');
            $table->text('description')->nullable()->default(null);
            $table->longText('value')->nullable()->default(null);

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
        Schema::table('user_settings', function ($table) {
            $table->dropForeign('user_settings_fk_user_id');
        });

        Schema::dropIfExists('user_settings');
    }
}
