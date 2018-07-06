<?php

namespace App\Models;



class Currency extends ModelValidation
{
    
    protected $table = "currency";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'decimal_points',
        'symbol',
        'active_flag',
        'is_custom_flag'
    ];

    
    protected $available = [
        'code',
        'name',
        'symbol',
    ];



    protected $visible = [
        'id',
        'name',
        'decimal_points',
        'symbol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'active_flag',
        'is_custom_flag',
    ];




    protected $rules = array(
        'code'=>['required'],
        'name'=>['required'],
        'symbol'=>['required'],
    );
}
