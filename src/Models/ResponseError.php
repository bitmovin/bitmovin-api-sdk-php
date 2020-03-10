<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ResponseError extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $requestId;

    /** @var ResponseStatus */
    public $status;

    /** @var ResponseErrorData */
    public $data;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->status = ObjectMapper::map($this->status, ResponseStatus::class);
        $this->data = ObjectMapper::map($this->data, ResponseErrorData::class);
    }
}

