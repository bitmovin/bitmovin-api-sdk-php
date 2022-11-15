<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class StreamsVideoEncodingTask extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var StreamsVideoQuality */
    public $quality;

    /** @var StreamsVideoEncodingStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->quality = ObjectMapper::map($this->quality, StreamsVideoQuality::class);
        $this->status = ObjectMapper::map($this->status, StreamsVideoEncodingStatus::class);
    }
}

