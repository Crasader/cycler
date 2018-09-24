<?php

namespace App\Models;



class Currencies extends ModelValidation
{
    
    protected $table = "currencies";

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
        'is_active',
        'is_custom_flag'
    ];

    
    protected $available = [
        'code',
        'name',
        'symbol',
        'decimal_points',
        'is_active',
        'created_at',
        'updated_at'
    ];



    protected $visible = [
        'id',
        'name',
        'symbol',
        'decimal_points',
        'is_active',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'is_custom_flag',
    ];




    protected $rules = array(
        'code'=>['required'],
        'name'=>['required'],
        'symbol'=>['required'],
    );
}
