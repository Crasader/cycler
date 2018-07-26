<?php

namespace App\Models;


class Pipeline extends ModelValidation
{


    protected $rules = array(
        'name'=>['required'],
    );

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $visible = [
        'name',
        'url_title',
        'order_nr',
        'active',
        'deal_probability',
        'update_time',
        'selected'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $available = [
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
