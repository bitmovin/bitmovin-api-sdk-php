<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class InternalChunkLength extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var ChunkLengthMode */
    public $mode;

    /** @var float */
    public $customChunkLength;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->mode = ObjectMapper::map($this->mode, ChunkLengthMode::class);
    }

    /**
     * Defines how the internal chunk length for encoding will be determined (required)
     *
     * @param ChunkLengthMode $mode
     * @return $this
     */
    public function mode(ChunkLengthMode $mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Defines a custom internal chunk length in seconds to be used for encoding if mode is set to &#x60;CUSTOM&#x60;. Valid range is from 1 to 180 seconds
     *
     * @param float $customChunkLength
     * @return $this
     */
    public function customChunkLength(float $customChunkLength)
    {
        $this->customChunkLength = $customChunkLength;

        return $this;
    }
}

