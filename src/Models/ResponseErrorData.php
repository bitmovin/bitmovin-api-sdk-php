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
}

