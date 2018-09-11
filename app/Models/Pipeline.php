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
        'name'
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
        'created_at',
        'updated_at'
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
        'created_at',
        'updated_at'
    ];





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
