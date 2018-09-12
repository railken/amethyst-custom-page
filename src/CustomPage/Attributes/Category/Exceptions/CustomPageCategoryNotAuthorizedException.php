<?php

namespace Railken\LaraOre\CustomPage\Attributes\Category\Exceptions;

use Railken\LaraOre\CustomPage\Exceptions\CustomPageAttributeException;

class CustomPageCategoryNotAuthorizedException extends CustomPageAttributeException
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
    protected $code = 'CUSTOMPAGE_CATEGORY_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
