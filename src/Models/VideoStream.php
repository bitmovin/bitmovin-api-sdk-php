<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VideoStream extends MediaStream
{
    /** @var string */
    public $fps;

    /** @var string */
    public $bitrate;

    /** @var int */
    public $rate;

    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var float */
    public $par;

    /** @var int */
    public $rotation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Frame rate of the video
     *
     * @param string $fps
     * @return $this
     */
    public function fps(string $fps)
    {
        $this->fps = $fps;

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
     * Bitrate in bps (the same as bitrate, but represented as an integer value)
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
     * Width of the video (required)
     *
     * @param int $width
     * @return $this
     */
    public function width(int $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Height of the video (required)
     *
     * @param int $height
     * @return $this
     */
    public function height(int $height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Pixel aspect ratio of the video. Default is 1.0
     *
     * @param float $par
     * @return $this
     */
    public function par(float $par)
    {
        $this->par = $par;

        return $this;
    }

    /**
     * Rotation of the video for mobile devices. Default is 0.
     *
     * @param int $rotation
     * @return $this
     */
    public function rotation(int $rotation)
    {
        $this->rotation = $rotation;

        return $this;
    }
}

