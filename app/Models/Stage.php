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
        'order_nr',
        'active_flag',
        'deal_probability',
        'pipeline_id',
        'rotten_flag',
        'rotten_days',
        'update_time',
        'pipeline_name'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $available = [
        'name',
        'order_nr',
        'active_flag',
        'deal_probability',
        'pipeline_id',
        'rotten_flag',
        'rotten_days',
        'update_time',
        'pipeline_name'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
