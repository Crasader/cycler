<?php

namespace App\Passport;


use Laravel\Passport\PersonalAccessTokenFactory as oPersonalAccessTokenFactory;
use Laravel\Passport\PersonalAccessTokenResult;

class PersonalAccessTokenFactory extends oPersonalAccessTokenFactory
{


    /**
     * Create a new personal access token.
     *
     * @param  mixed  $userId
     * @param  string  $name
     * @param  array  $scopes
     * @return \Laravel\Passport\PersonalAccessTokenResult
     */
    public function make($userId, $name, array $scopes = [],$time = null)
    {
        $response = $this->dispatchRequestToAuthorizationServer(
            $this->createRequest($this->clients->personalAccessClient(), $userId, $scopes)
        );

        $token = tap($this->findAccessToken($response), function ($token) use ($userId, $name, $time) {
            
            $attributes = [
                'user_id' => $userId,
                'name' => $name
            ];
            $time ? $attributes['expires_at'] = $time : null;
            
            $this->tokens->save($token->forceFill($attributes));
        });

        return new PersonalAccessTokenResult(
            $response['access_token'], $token
        );
    }


}
