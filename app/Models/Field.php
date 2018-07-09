<?php 
namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Field extends ModelValidation
{	
	

	/*
	* Table name in the BD
	*/
	protected $table = "fields_schema";


	/*
	* including created_at and updated_at columns in the table
	*/
	public $timestamps = false;



	/*
	* Fillable model properties
	*/
	protected $fillable = [
        'dbtable', 
        'name', 
        'model_type',
        'data_type',
        'alias',
        'auto_increment',
        'is_nullable',
        'is_unsigned',
        'is_system',
        'format',
        'values',
        'default',
        'max_length',
        'numeric_precision',
        'numeric_scale',
        'key',
        'fk_table',
        'fk_table_column',
        'title',
        'description',
        'minimum',
        'maximum',
        'min_length',
        'stored_as',
        'virtual_as',
        'character_charset',
        'character_collation',
        'is_required',
        'pattern',
    ];



    protected $available = [
        'id',
        'dbtable', 
        'name', 
        'model_type',
        'data_type',
        'alias',
        'auto_increment',
        'is_nullable',
        'is_unsigned',
        'is_system',
        'format',
        'values',
        'default',
        'max_length',
        'numeric_precision',
        'numeric_scale',
        'key',
        'fk_table',
        'fk_table_column',
        'title',
        'description',
        'minimum',
        'maximum',
        'min_length',
        'stored_as',
        'virtual_as',
        'character_charset',
        'character_collation',
        'is_required',
        'pattern',
    ];



    protected $visible = [
        'id',
        'dbtable', 
        'name', 
        'model_type',
        'data_type',
        'alias',
        'auto_increment',
        'is_nullable',
        'is_unsigned',
        'is_system',
        'format',
        'values',
        'default',
        'max_length',
        'numeric_precision',
        'numeric_scale',
        'key',
        'fk_table',
        'fk_table_column',
        'title',
        'description',
        'minimum',
        'maximum',
        'min_length',
        'stored_as',
        'virtual_as',
        'character_charset',
        'character_collation',
        'is_required',
        'pattern',
    ];

    protected $rules = array(
            'dbtable'                 =>  ['required','string','max:64'],
            'name'                  =>  ['required','string','max:64'],
            'model_type'            =>  ['required','string','max:32','in:Array,Boolean,Integer,Number,Object,String,$ref'],
            'data_type'             =>  [
                                        'required',
                                        'string',
                                        'max:64',
                                        'in:varchar,int,datetime,time,enum,tinyint,boolean,text,timestamp'
                                    ],
            'alias'                 =>  ['max:255', 'string','nullable'],
            'auto_increment'        =>  ['boolean'],
            'is_nullable'           =>  ['boolean'],
            'is_unsigned'           =>  ['boolean','nullable'],
            'is_system'             =>  ['boolean'],
            'format'                =>  ['string','max:255'],
            'values'                =>  ['string','nullable'],
            'default'               =>  ['string','nullable'],
            'max_length'            =>  ['integer','nullable'],
            'numeric_precision'     =>  ['integer','nullable'],
            'numeric_scale'         =>  ['integer','nullable'],
            'key'                   =>  ['string','max:3','in:PRI,MUL,UNI'],
            'fk_table'              =>  ['string','max:64'],
            'fk_table_column'       =>  ['string','max:64'],
            'title'                 =>  ['string','max:64'],
            'description'           =>  ['string','nullable'],
            'minimum'               =>  ['integer','nullable'],
            'maximum'               =>  ['integer','nullable'],
            'min_length'            =>  ['integer','nullable'],
            'stored_ad'             =>  ['string','nullable'],
            'virtual_as'            =>  ['string','nullable'],
            'character_charset'     =>  ['string','max:32','nullable'],
            'character_collation'   =>  ['string','max:32','nullable'],
            'is_required'           =>  ['boolean'],
            'pattern'               =>  ['string','max:255'],
    );



    public function rules(){
    	return $this->rules;
    }






    public static function getSchema(ModelValidation $model){
        return Field::where('dbtable','=',$model->getTable())->orderBy('id')->get(['name','model_type','alias'])->toArray();
    }





    public static function hasTable($table){
        if(!$table) return false;

        return Schema::hasTable($table);

    }



    public static function hasColumn($table,$column){
        return Schema::hasColumn($table,$column);
    }


    public function dropColumn(){
        if(self::hasTable($this->dbtable) && self::hasColumn($this->dbtable,$this->name)){
            $column = $this->name;
            Schema::table($this->dbtable, function (Blueprint $table) use($column){
                $table->dropColumn($column);
            });
        }
    }




    public function addColumn(){
        
        if(self::hasTable($this->dbtable) && !self::hasColumn($this->dbtable,$this->name)){
            $column = $this;
            Schema::table($this->dbtable, function($table) use($column) {
                
                if($column->auto_increment && $column->data_type == "int"){
                    //Проверить есть ли в таблице колонка с автоинкрементом
                    $table->increments($column->name);
                }else{
                    $table_column = null;
                    switch ($column->data_type) {
                        case 'int':
                            $table_column = $table->integer($column->name);
                            break;

                        case 'varchar':
                            $table_column = $table->string($column->name);
                            break;
                        
                        case 'text':
                            $table_column = $table->text($column->name);
                            break;

                        case 'boolean':
                            $table_column = $table->boolean($column->name);
                            break;

                        case 'tinyint':
                            $table_column = $table->unsignedTinyInteger($column->name);
                            break;

                        case 'datetime':
                            $table_column = $table->dateTime($column->name);
                            break;
                        case 'date':
                            $table_column = $table->date($column->name);
                            break;
                        case 'timestamp':
                            $table_column = $table->timestamp($column->name);
                            break;
                        case 'enum':
                            $table_column = $table->enum($column->name, json_decode($column->values));
                            break;
                    }


                    if(!$column->is_required){
                        $table_column->nullable()->default(null);
                    }

                    if($column->is_nullable){
                        $table_column->nullable();   
                    }

                    if($column->default){
                        $table_column->default($column->default);   
                    }

                }

                
            });

            return true;
        }

        return false;
    }

}