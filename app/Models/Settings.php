<?php

namespace App\Models;


class Settings extends ModelValidation
{

    /*
    * Table name in the BD
    */
    protected $table = "settings";


    /*
    * including created_at and updated_at columns in the table
    */
    public $timestamps = false;




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
