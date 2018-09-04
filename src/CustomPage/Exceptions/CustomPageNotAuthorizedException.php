<?php

namespace Railken\LaraOre\CustomPage\Exceptions;

class CustomPageNotAuthorizedException extends CustomPageException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CUSTOMPAGE_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
