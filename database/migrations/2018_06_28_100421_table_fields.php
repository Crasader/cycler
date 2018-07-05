<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->alterDelas();

        $fields = $this->getFields();

        foreach ($fields as $field) {
            DB::table("fields_schema")->insert($field);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deals', function ($table) {
            $table->dropForeign('deals_user_id');
            $table->dropForeign('deals_creator_id');
            $table->dropForeign('deals_stage_id');
            $table->dropForeign('deals_pipeline_id');
        });

    }

    public function alterDelas(){


        Schema::table('deals',function ($table){
           $table->string("title",64);
           
           $table->integer("user_id");
           $table->foreign('user_id','deals_user_id')->references('id')->on('users');
           
           $table->integer("creator_id");
           $table->foreign('creator_id','deals_creator_id')->references('id')->on('users');

           $table->enum("status",['Open','Won','Lost','Deleted']);
           $table->enum("lost_reason",['reason1','reason2','reason3']);


           $table->integer("stage_id");
           $table->foreign('stage_id','deals_stage_id')->references('id')->on('stages');

           $table->integer("pipeline_id");
           $table->foreign('pipeline_id','deals_pipeline_id')->references('id')->on('pipelines');

           $table->string("value")->nullable()->default(null);
           $table->string("currency")->nullable()->default(null);


           $table->enum("person_type",["pt1","pt2","pt3"])->nullable();
           $table->string("person_name")->nullable();
           $table->string("person_phone")->nullable();
           $table->string("person_email")->nullable();


           $table->timestamp("dts_created");
           $table->timestamp("dts_updated")->nullable()->default(null);
        });

        
    }


    public function getFields(){

      return [
          "id"=>[
                'table' => 'deals',
                'name' => 'id',
                'model_type'=>'Integer',
                'data_type'=>'int',
                'auto_increment'=>true,
                'key'=>'PRI',
                'title'=>'ID'
          ],
          "title"=>[
                'table' => 'deals',
                'name' => 'title',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'Наименование',
                'is_required'=>true,
                'is_nullable'=>false,
          ],
          "user_id"=>[
                'table' => 'deals',
                'name' => 'user_id',
                'model_type'=>'Object',
                'data_type'=>'int',
                'alias'=>'Пользователь',
                'key'=>'FK',
                'fk_table'=>"users",
                'fk_table_column'=>"id",
                'is_required'=>true,
          ],
          "creator_id"=>[
                'table' => 'deals',
                'name' => 'creator_id',
                'model_type'=>'Object',
                'data_type'=>'int',
                'alias'=>'Создатель',
                'key'=>'FK',
                'fk_table'=>"users",
                'fk_table_column'=>"id",
                'is_required'=>true,
          ],
          "status"=>[
                'table' => 'deals',
                'name' => 'status',
                'model_type'=>'Array',
                'data_type'=>'enum',
                'alias'=>'Статус',
                'values'=>json_encode(['Open','Won','Lost','Deleted']),
                'is_required'=>true,
          ],
          "lost_reason"=>[
                'table' => 'deals',
                'name' => 'lost_reason',
                'model_type'=>'Array',
                'data_type'=>'enum',
                'alias'=>'Статус',
                'values'=>json_encode(['reason1','reason2','reason3']),
                'is_required'=>true,
          ],

          "stage_id"=>[
                'table' => 'deals',
                'name' => 'stage_id',
                'model_type'=>'Object',
                'data_type'=>'int',
                'alias'=>'Стадия',
                'key'=>'FK',
                'fk_table'=>"stages",
                'fk_table_column'=>"id",
                'is_required'=>true,
          ],
          "pipeline_id"=>[
                'table' => 'deals',
                'name' => 'pipeline_id',
                'model_type'=>'Object',
                'data_type'=>'int',
                'alias'=>'Pipeline',
                'key'=>'FK',
                'fk_table'=>"pipelines",
                'fk_table_column'=>"id",
                'is_required'=>true,
          ],

          "value"=>[
                'table' => 'deals',
                'name' => 'value',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'Значение',
                'is_nullable'=>false,
          ],

          "currency"=>[
                'table' => 'deals',
                'name' => 'currency',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'Валюта',
                'is_nullable'=>false,
          ],

          "person_type"=>[
                'table' => 'deals',
                'name' => 'person_type',
                'model_type'=>'Array',
                'data_type'=>'enum',
                'alias'=>'Тип персоны',
                'values'=>json_encode(["pt1","pt2","pt3"]),
                'is_nullable' => true,
          ],

          "person_name"=>[
                'table' => 'deals',
                'name' => 'person_name',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'Имя персоны',
                'is_nullable' => true,
          ],

          "person_phone"=>[
                'table' => 'deals',
                'name' => 'person_phone',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'Телефон персоны',
                'is_nullable' => true,
          ],

          "person_email"=>[
                'table' => 'deals',
                'name' => 'person_email',
                'model_type'=>'String',
                'data_type'=>'varchar',
                'alias'=>'E-mail персоны',
                'is_nullable' => true,
          ],

          "dts_created"=>[
                'table' => 'deals',
                'name' => 'dts_created',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
          ],
          "dts_updated"=>[
                'table' => 'deals',
                'name' => 'dts_updated',
                'model_type'=>'Integer',
                'data_type'=>'timestamp',
                'is_nullable' => true,
                'default'=>null
          ]
      ];

    }
}
