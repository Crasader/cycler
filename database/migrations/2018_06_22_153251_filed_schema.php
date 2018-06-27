<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FiledSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields_schema', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('table',64);
            $table->string('name',64);
            $table->enum('model_type',['Array','Boolean','Integer','Number','Object','String','$ref']); //Enum
            $table->string('data_type',64);
            $table->string('alias',255)->default("");
            
            $table->unsignedTinyInteger('auto_increment')->default(0);
            $table->unsignedTinyInteger('is_nullable')->default(0);
            $table->unsignedTinyInteger('is_unsigned')->default(null)->nullable();
            $table->unsignedTinyInteger('is_system')->default(0);
            
            $table->string('format',255)->default("");
            
            $table->longText('values')->nullable();
            $table->longText('default')->nullable();
            
            $table->bigInteger('max_length')->unsigned()->nullable()->default(null);
            $table->bigInteger('numeric_precision')->unsigned()->nullable()->default(null);
            $table->bigInteger('numeric_scale')->unsigned()->nullable()->default(null);
            
            $table->string('key',3)->default("");

            $table->string('title',64)->default("");
            
            $table->text('description')->nullable();
            
            $table->bigInteger('minimum')->unsigned()->nullable()->default(null);
            $table->bigInteger('maximum')->unsigned()->nullable()->default(null);
            $table->bigInteger('min_length')->unsigned()->nullable()->default(null);
            
            $table->text('stored_as')->nullable();
            $table->text('virtual_as')->nullable();

            $table->string('character_charset',32)->nullable();
            $table->string('character_collation',32)->nullable();
            $table->unsignedTinyInteger('is_required')->default(0);
            $table->string('pattern',255)->default("");

            $table->unique(['table', 'name'],'table_name_unique_index');

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
        Schema::dropIfExists('fields_schema');
    }
}
