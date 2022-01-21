<?php

namespace App\Services;

use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

class TokenManager
{
    /**
        Token Abilities is similar as OAuth Scopes. 
        OAuth Scopes: Scopes is a mechanism in OAuth to limit an application's access to a user's Account.
        An application can request one or more scopes s, this information is then presented to the user 
        in the consent screen, and the access token issued to the application will be limited to the scopes granted.
    */
    public function createToken(User $user, array $abilities = ['*']): NewAccessToken
    {
        return $user->createToken(config('app.name'), $abilities);
    }

    public function destroyTokens(User $user) : void
    {
        $user->tokens()->delete();
    }
}