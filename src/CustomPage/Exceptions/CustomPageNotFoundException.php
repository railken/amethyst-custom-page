<?php

namespace Railken\LaraOre\CustomPage\Exceptions;

class CustomPageNotFoundException extends CustomPageException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CUSTOMPAGE_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
