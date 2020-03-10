<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResponseErrorData extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $code;

    /** @var string */
    public $message;

    /** @var string */
    public $developerMessage;

    /** @var \BitmovinApiSdk\Models\Link[] */
    public $links;

    /** @var \BitmovinApiSdk\Models\Message[] */
    public $details;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->links = ObjectMapper::map($this->links, Link::class);
        $this->details = ObjectMapper::map($this->details, Message::class);
    }

    /**
     * Contains an error code as defined in https://bitmovin.com/encoding-documentation/bitmovin-api/#/introduction/api-error-codes (required)
     *
     * @param int $code
     * @return $this
     */
    public function code(int $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * General error message (required)
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * More detailed message meant for developers (required)
     *
     * @param string $developerMessage
     * @return $this
     */
    public function developerMessage(string $developerMessage)
    {
        $this->developerMessage = $developerMessage;

        return $this;
    }

    /**
     * collection of links to webpages containing further information on the topic
     *
     * @param \BitmovinApiSdk\Models\Link[] $links
     * @return $this
     */
    public function links(array $links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * collection of messages containing more detailed information on the cause of the error
     *
     * @param \BitmovinApiSdk\Models\Message[] $details
     * @return $this
     */
    public function details(array $details)
    {
        $this->details = $details;

        return $this;
    }
}

