<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CustomPageAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'custom-page.create',
        Tokens::PERMISSION_UPDATE => 'custom-page.update',
        Tokens::PERMISSION_SHOW   => 'custom-page.show',
        Tokens::PERMISSION_REMOVE => 'custom-page.remove',
    ];
}
