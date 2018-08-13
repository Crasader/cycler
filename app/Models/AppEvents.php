<?php

namespace App\Models;


class AppEvents extends ModelValidation
{

    /*
    * Table name in the BD
    */
    protected $table = "events";


    /*
    * including created_at and updated_at columns in the table
    */
    public $timestamps = false;




    protected $rules = array(
        'table'=>['required'],
        'row_id'=>['required'],
        'fields'=>['required'],
        'user_id'=>['required'],
        'action'=>['required','in:created,updated,deleted'],
    );




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'table',
        'row_id',
        'fields',
        'user_id',
        'action'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'table',
        'row_id',
        'fields',
        'user_id',
        'action'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $available = [
        'id',
        'table',
        'row_id',
        'fields',
        'user_id',
        'action'
    ];





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
