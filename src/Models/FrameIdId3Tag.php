<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class FrameIdId3Tag extends Id3Tag
{
    /** @var string */
    public $bytes;

    /** @var string */
    public $frameId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Base64 Encoded Data (required)
     *
     * @param string $bytes
     * @return $this
     */
    public function bytes(string $bytes)
    {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * 4 character long Frame ID (required)
     *
     * @param string $frameId
     * @return $this
     */
    public function frameId(string $frameId)
    {
        $this->frameId = $frameId;

        return $this;
    }
}

