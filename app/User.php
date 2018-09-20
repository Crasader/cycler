<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use App\Models\AuthUser as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $visible = [
        'id','name', 'email','created_at','updated_at'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
        'privot'
    ];




    public function getRolesIds(){

        $roles = $this->roles()->get(['id'])->toArray();
        return array_map(function($r){return $r['id'];}, $roles);
    }


    public function getCreatedAtAttribute($date){
        return strtotime($date);
    }

    public function getUpdatedAtAttribute($date){
        return strtotime($date);
    }
}
