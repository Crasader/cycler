<?php

namespace App;


class Stage extends ModelValidation
{

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
