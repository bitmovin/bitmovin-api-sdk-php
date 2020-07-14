<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class VideoConfiguration extends CodecConfiguration
{
    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var int */
    public $bitrate;

    /** @var float */
    public $rate;

    /** @var PixelFormat */
    public $pixelFormat;

    /** @var ColorConfig */
    public $colorConfig;

    /** @var int */
    public $sampleAspectRatioNumerator;

    /** @var int */
    public $sampleAspectRatioDenominator;

    /** @var DisplayAspectRatio */
    public $displayAspectRatio;

    /** @var EncodingMode */
    public $encodingMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->pixelFormat = ObjectMapper::map($this->pixelFormat, PixelFormat::class);
        $this->colorConfig = ObjectMapper::map($this->colorConfig, ColorConfig::class);
        $this->displayAspectRatio = ObjectMapper::map($this->displayAspectRatio, DisplayAspectRatio::class);
        $this->encodingMode = ObjectMapper::map($this->encodingMode, EncodingMode::class);
    }

    /**
     * Width of the encoded video in pixels
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
     * Height of the encoded video in pixels
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
     * Target bitrate for the encoded video in bps. Either bitrate or crf is required.
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
     * Target frame rate of the encoded video. Must be set for live encodings
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
     * Describes the color encoding, bit depth, and chroma subsampling of each pixel in the output image.
     *
     * @param PixelFormat $pixelFormat
     * @return $this
     */
    public function pixelFormat(PixelFormat $pixelFormat)
    {
        $this->pixelFormat = $pixelFormat;

        return $this;
    }

    /**
     * colorConfig
     *
     * @param ColorConfig $colorConfig
     * @return $this
     */
    public function colorConfig(ColorConfig $colorConfig)
    {
        $this->colorConfig = $colorConfig;

        return $this;
    }

    /**
     * The numerator of the sample aspect ratio (also known as pixel aspect ratio). Must be set if sampleAspectRatioDenominator is set. If set then displayAspectRatio is not allowed.
     *
     * @param int $sampleAspectRatioNumerator
     * @return $this
     */
    public function sampleAspectRatioNumerator(int $sampleAspectRatioNumerator)
    {
        $this->sampleAspectRatioNumerator = $sampleAspectRatioNumerator;

        return $this;
    }

    /**
     * The denominator of the sample aspect ratio (also known as pixel aspect ratio). Must be set if sampleAspectRatioNumerator is set. If set then displayAspectRatio is not allowed.
     *
     * @param int $sampleAspectRatioDenominator
     * @return $this
     */
    public function sampleAspectRatioDenominator(int $sampleAspectRatioDenominator)
    {
        $this->sampleAspectRatioDenominator = $sampleAspectRatioDenominator;

        return $this;
    }

    /**
     * Specifies a display aspect ratio (DAR) to be enforced. The sample aspect ratio (SAR) will be adjusted accordingly. If set then sampleAspectRatioNumerator and sampleAspectRatioDenominator are not allowed.
     *
     * @param DisplayAspectRatio $displayAspectRatio
     * @return $this
     */
    public function displayAspectRatio(DisplayAspectRatio $displayAspectRatio)
    {
        $this->displayAspectRatio = $displayAspectRatio;

        return $this;
    }

    /**
     * The mode of the encoding
     *
     * @param EncodingMode $encodingMode
     * @return $this
     */
    public function encodingMode(EncodingMode $encodingMode)
    {
        $this->encodingMode = $encodingMode;

        return $this;
    }
}

