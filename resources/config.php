<?php

return [
    'oauthconf' => [ // See http://oauth2-client.thephpleague.com/usage/#authorization-code-flow
        'clientId' => 'demoapp', // The client ID assigned to you by the provider
        'clientSecret' => 'demopass', // The client password assigned to you by the provider
        'redirectUri' => 'http://example.com/oauth/callback',
        'urlAuthorize' => 'http://example.com/oauth/authorize',
        'urlAccessToken' => 'http://example.com/oauth/token',
        'urlResourceOwnerDetails' => 'http://example.com/oauth/resource',
    ],
    'provider' => \Kronthto\LaravelOAuth2Login\OAuthProvider::class,

    'oauth_redirect_path' => '/oauth/callback',

    'session_key' => 'oauth_session',
    'session_key_state' => 'oauth_auth_state',

    'resource_owner_attribute' => 'oauth_user',
    'auth_driver_key' => 'oauth',
    'authWrapperFactory' => null, // Can be used to specify a factory with an __invoke (ResourceOwnerInterface passed as arg1) method to build a custom User object
    'authWrapper' => \Kronthto\LaravelOAuth2Login\OAuthUserWrapper::class, // Ignored if authWrapperFactory is not null

    'cacheUserDetailsFor' => 30, // minutes
    'cacheUserPrefix' => 'oauth_user_',
];
