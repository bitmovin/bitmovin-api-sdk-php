<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MuxingStream extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $streamId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * streamId
     *
     * @param string $streamId
     * @return $this
     */
    public function streamId(string $streamId)
    {
        $this->streamId = $streamId;

        return $this;
    }
}

