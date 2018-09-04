<?php

namespace Railken\LaraOre\CustomPage\Attributes\Label;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;

class LabelAttribute extends BaseAttribute
{
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'label';

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
        Tokens::NOT_DEFINED    => Exceptions\CustomPageLabelNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\CustomPageLabelNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\CustomPageLabelNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\CustomPageLabelNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'custompage.attributes.label.fill',
        Tokens::PERMISSION_SHOW => 'custompage.attributes.label.show',
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
        return true;
    }
}
