<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MediaStream extends BitmovinResponse
{
    /** @var int */
    public $position;

    /** @var int */
    public $duration;

    /** @var string */
    public $codec;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Position starts from 0 and indicates the position of the stream in the media. 0 means that this is the first stream found in the media
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
     * @param int $duration
     * @return $this
     */
    public function duration(int $duration)
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

