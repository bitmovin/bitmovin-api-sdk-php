<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class BitmovinStreamEncodingTask extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var BitmovinStreamQuality */
    public $quality;

    /** @var BitmovinStreamEncodingStatus */
    public $status;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->quality = ObjectMapper::map($this->quality, BitmovinStreamQuality::class);
        $this->status = ObjectMapper::map($this->status, BitmovinStreamEncodingStatus::class);
    }
}

