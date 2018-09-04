<?php

namespace Railken\LaraOre\CustomPage\Attributes\Html;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class HtmlAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'html';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\CustomPageHtmlNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\CustomPageHtmlNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\CustomPageHtmlNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\CustomPageHtmlNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'custompage.attributes.html.fill',
        Tokens::PERMISSION_SHOW => 'custompage.attributes.html.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     * @param mixed                                             $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::length(1, 255)->validate($value);
    }
}
