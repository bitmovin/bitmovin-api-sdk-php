<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MediaStream extends BitmovinResponse
{
    /** @var int */
    public $position;

    /** @var float */
    public $duration;

    /** @var string */
    public $codec;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Position of the stream in the media, starting from 0.
     *
     * @param int $position
     * @return $this
     */
    public function position(int $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Duration of the stream in seconds
     *
     * @param float $duration
     * @return $this
     */
    public function duration(float $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Codec of the stream
     *
     * @param string $codec
     * @return $this
     */
    public function codec(string $codec)
    {
        $this->codec = $codec;

        return $this;
    }
}

