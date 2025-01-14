<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Scte35Trigger extends BitmovinResponse
{
    /** @var float */
    public $time;

    /** @var string */
    public $base64EncodedMetadata;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Time in seconds where the SCTE 35 trigger should be inserted (required)
     *
     * @param float $time
     * @return $this
     */
    public function time(float $time)
    {
        $this->time = $time;

        return $this;
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

