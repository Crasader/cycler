<?php

namespace App\Models;


class Stage extends ModelValidation
{


    protected $table = "stages";


    protected $rules = array(
        'name'=>['required'],
        'pipeline_id'=>['required']
    );


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'order_nr',
        'pipeline_id',
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $available = [
        'id',
        'name',
        'description',
        'order_nr',
        'pipeline_id'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
        'description',
        'order_nr',
        'pipeline_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
