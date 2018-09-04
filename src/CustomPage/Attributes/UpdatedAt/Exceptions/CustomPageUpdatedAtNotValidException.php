<?php

namespace Railken\LaraOre\CustomPage\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\CustomPage\Exceptions\CustomPageAttributeException;

class CustomPageUpdatedAtNotValidException extends CustomPageAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CUSTOMPAGE_UPDATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}