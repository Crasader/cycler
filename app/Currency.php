<?php

namespace App;


class Currency extends ModelValidation
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name'
        'decimal_points',
        'symbol',
        'active_flag',
        'is_custom_flag'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
