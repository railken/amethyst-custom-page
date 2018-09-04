<?php

namespace Railken\LaraOre\CustomPage;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class CustomPageAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'custom_page.create',
        Tokens::PERMISSION_UPDATE => 'custom_page.update',
        Tokens::PERMISSION_SHOW   => 'custom_page.show',
        Tokens::PERMISSION_REMOVE => 'custom_page.remove',
    ];
}
