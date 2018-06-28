<?php

namespace App;


class Pipeline extends ModelValidation
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'url_title',
        'order_nr',
        'active',
        'deal_probability',
        'update_time',
        'selected'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
