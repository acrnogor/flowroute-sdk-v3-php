<?php
/*
 * FlowrouteNumbersAndMessagingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FlowrouteNumbersAndMessagingLib\Models;

use JsonSerializable;

/**
 * @This class encapsulates the properties of an SMS (text) Message
 */
class Message implements JsonSerializable
{
    /**
     * @The telephone number of the message target
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * @The Flowroute DID you are sending the message from
     * @required
     * @var string $to public property
     */
    public $to;

    /**
     * @The text content of the message
     * @var string|NULL $body public property
     */
    public $body;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $from      Initialization value for $this->from
     * @param string $to        Initialization value for $this->to
     * @param string $body      Initialization value for $this->body
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->from      = func_get_arg(0);
            $this->to        = func_get_arg(1);
            $this->body      = func_get_arg(2);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['from']       = $this->from;
        $json['to']         = $this->to;
        $json['body']       = $this->body;

        return $json;
    }
}

/**
 * @This class encapsulates the properties of an MMS (Multi-Media) Message
 */
class MMS_Message implements JsonSerializable
{
    /**
     * @The telephone number of the message target
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * @The Flowroute DID you are sending the message from
     * @required
     * @var string $to public property
     */
    public $to;

    /**
     * @The text content of the message
     * @var string|NULL $body public property
     */
    public $body;

    /**
     * @a list of the URLs that contain the media for the message.  These
     *   must be publicly available URLS such as
     *   https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png
     * @maps media_urls
     * @var array|NULL $mediaUrls public property
     */
    public $mediaUrls;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $from      Initialization value for $this->from
     * @param string $to        Initialization value for $this->to
     * @param string $body      Initialization value for $this->body
     * @param array  $mediaUrls Initialization value for $this->mediaUrls
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->from      = func_get_arg(0);
            $this->to        = func_get_arg(1);
            $this->body      = func_get_arg(2);
            $this->mediaUrls = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['from']       = $this->from;
        $json['to']         = $this->to;
        $json['body']       = $this->body;
        $json['media_urls'] = $this->mediaUrls;

        return $json;
    }
}
