<?php

namespace Railken\LaraOre\CustomPage\Attributes\Category\Exceptions;

use Railken\LaraOre\CustomPage\Exceptions\CustomPageAttributeException;

class CustomPageCategoryNotUniqueException extends CustomPageAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'category';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CUSTOMPAGE_CATEGORY_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
