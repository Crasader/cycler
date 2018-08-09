<?php

namespace App\Passport;

use Laravel\Passport\HasApiTokens as oHasApiTokens;
use Illuminate\Container\Container;
use App\Passport\PersonalAccessTokenFactory;

trait HasApiTokens
{   
    use oHasApiTokens;
    
    /**
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $scopes
     * @return \Laravel\Passport\PersonalAccessTokenResult
     */
    public function createToken($name, array $scopes = [], $time = null)
    {
        //$time = !$time ? time()+3600 : $time;
        return Container::getInstance()->make(PersonalAccessTokenFactory::class)->make(
            $this->getKey(), $name, $scopes, $time
        );

    }
}
