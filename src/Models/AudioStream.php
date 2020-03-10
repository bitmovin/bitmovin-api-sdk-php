<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AudioStream extends MediaStream
{
    /** @var int */
    public $sampleRate;

    /** @var string */
    public $bitrate;

    /** @var int */
    public $rate;

    /** @var string */
    public $channelFormat;

    /** @var string */
    public $language;

    /** @var bool */
    public $hearingImpaired;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Audio sampling rate in Hz
     *
     * @param int $sampleRate
     * @return $this
     */
    public function sampleRate(int $sampleRate)
    {
        $this->sampleRate = $sampleRate;

        return $this;
    }

    /**
     * Bitrate in bps
     *
     * @param string $bitrate
     * @return $this
     */
    public function bitrate(string $bitrate)
    {
        $this->bitrate = $bitrate;

        return $this;
    }

    /**
     * Bitrate in bps
     *
     * @param int $rate
     * @return $this
     */
    public function rate(int $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Audio channel format
     *
     * @param string $channelFormat
     * @return $this
     */
    public function channelFormat(string $channelFormat)
    {
        $this->channelFormat = $channelFormat;

        return $this;
    }

    /**
     * Language of the stream
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Hearing impaired support
     *
     * @param bool $hearingImpaired
     * @return $this
     */
    public function hearingImpaired(bool $hearingImpaired)
    {
        $this->hearingImpaired = $hearingImpaired;

        return $this;
    }
}

