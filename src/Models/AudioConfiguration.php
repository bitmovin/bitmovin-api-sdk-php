<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioConfiguration extends CodecConfiguration
{
    /** @var int */
    public $bitrate;

    /** @var float */
    public $rate;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Target bitrate for the encoded audio in bps (required)
     *
     * @param int $bitrate
     * @return $this
     */
    public function bitrate(int $bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Audio sampling rate Hz
     *
     * @param float $rate
     * @return $this
     */
    public function rate(float $rate)
    {
        $this->rate = $rate;

        return $this;
    }
}

