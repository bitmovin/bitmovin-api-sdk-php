<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class TimeBasedTrimmingInputStream extends InputStream
{
    /** @var string */
    public $inputStreamId;

    /** @var float */
    public $offset;

    /** @var float */
    public $duration;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The id of the ingest input stream that should be trimmed
     *
     * @param string $inputStreamId
     * @return $this
     */
    public function inputStreamId(string $inputStreamId)
    {
        $this->inputStreamId = $inputStreamId;

        return $this;
    }

    /**
     * Defines the offset in seconds at which the encoding should start, beginning at 0. The frame indicated by this value will be included in the encoding
     *
     * @param float $offset
     * @return $this
     */
    public function offset(float $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * Defines how many seconds of the input will be encoded. Not defining or setting it to null indicates that the remaining input (considering offset) will be encoded.
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }
}

