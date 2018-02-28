<?php
/*
 * FlowrouteNumbersAndMessagingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FlowrouteNumbersAndMessagingLib\Exceptions;

use FlowrouteNumbersAndMessagingLib\APIException;
use FlowrouteNumbersAndMessagingLib\APIHelper;

/**
 * @todo Write general description for this model
 */
class ErrorException extends APIException
{
    /**
     * @todo Write general description for this property
     * @var \FlowrouteNumbersAndMessagingLib\Models\Error1[]|null $errors public property
     */
    public $errors;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct($reason, $context)
    {
        parent::__construct($reason, $context);
    }

    /**
     * Unbox response into this exception class
     */
    public function unbox()
    {
        APIHelper::deserialize(self::getResponseBody(), $this, false, false);
    }
}