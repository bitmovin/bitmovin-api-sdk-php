<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class MjpegVideoConfiguration extends CodecConfiguration
{
    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var float */
    public $rate;

    /** @var int */
    public $qScale;

    /** @var PixelFormat */
    public $pixelFormat;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->pixelFormat = ObjectMapper::map($this->pixelFormat, PixelFormat::class);
    }

    /**
     * Width of the encoded video
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
     * Height of the encoded video
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
     * Target frame rate of the encoded video! (required)
     *
     * @param float $rate
     * @return $this
     */
    public function rate(float $rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * The quality scale parameter (required)
     *
     * @param int $qScale
     * @return $this
     */
    public function qScale(int $qScale)
    {
        $this->qScale = $qScale;

        return $this;
    }

    /**
     * pixelFormat
     *
     * @param PixelFormat $pixelFormat
     * @return $this
     */
    public function pixelFormat(PixelFormat $pixelFormat)
    {
        $this->pixelFormat = $pixelFormat;

        return $this;
    }
}

