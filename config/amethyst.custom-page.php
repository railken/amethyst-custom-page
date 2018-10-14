<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'custom-page' => [
            'table'      => 'amethyst_custom_pages',
            'comment'    => 'Custom Page',
            'model'      => Railken\Amethyst\Models\CustomPage::class,
            'schema'     => Railken\Amethyst\Schemas\CustomPageSchema::class,
            'repository' => Railken\Amethyst\Repositories\CustomPageRepository::class,
            'serializer' => Railken\Amethyst\Serializers\CustomPageSerializer::class,
            'validator'  => Railken\Amethyst\Validators\CustomPageValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\CustomPageAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\CustomPageFaker::class,
            'manager'    => Railken\Amethyst\Managers\CustomPageManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'custom-page' => [
                'enabled'     => true,
                'controller'  => Railken\Amethyst\Http\Controllers\Admin\CustomPagesController::class,
                'router'      => [
                    'as'        => 'custom-page.',
                    'prefix'    => '/custom-pages',
                ],
            ],
        ],
    ],
];
