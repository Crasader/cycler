<?php

namespace App\Models;


class Settings extends ModelValidation
{

    /*
    * Table name in the BD
    */
    protected $table = "settings";


   


    protected $rules = array(
        'name'=>['required','unique:settings'],
    );




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'value'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $visible = [
        'id',
        'name',
        'value'
    ];




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $available = [
        'id',
        'name',
        'value'
    ];





    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
