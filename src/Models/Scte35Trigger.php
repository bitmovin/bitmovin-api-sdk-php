<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scte35Trigger extends BitmovinResponse
{
    /** @var string */
    public $base64EncodedMetadata;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The base 64 encoded data for the SCTE trigger (required)
     *
     * @param string $base64EncodedMetadata
     * @return $this
     */
    public function base64EncodedMetadata(string $base64EncodedMetadata)
    {
        $this->base64EncodedMetadata = $base64EncodedMetadata;

        return $this;
    }
}

