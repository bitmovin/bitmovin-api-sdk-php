<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Bif extends BitmovinResource
{
    /** @var int */
    public $height;

    /** @var int */
    public $width;

    /** @var float */
    public $distance;

    /** @var string */
    public $filename;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var ThumbnailAspectMode */
    public $aspectMode;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->aspectMode = ObjectMapper::map($this->aspectMode, ThumbnailAspectMode::class);
    }

    /**
     * Height of one thumbnail
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
     * Width of one thumbnail. Roku recommends a width of 240 for SD and 320 for HD.
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
     * Distance in seconds between a screenshot (required)
     *
     * @param float $distance
     * @return $this
     */
    public function distance(float $distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Filename of the Bif image. (required)
     *
     * @param string $filename
     * @return $this
     */
    public function filename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * outputs
     *
     * @param \BitmovinApiSdk\Models\EncodingOutput[] $outputs
     * @return $this
     */
    public function outputs(array $outputs)
    {
        $this->outputs = $outputs;

        return $this;
    }

    /**
     * Specifies the aspect mode that is used when both height and width are specified Only supported starting with encoder version &#x60;2.85.0&#x60;.
     *
     * @param ThumbnailAspectMode $aspectMode
     * @return $this
     */
    public function aspectMode(ThumbnailAspectMode $aspectMode)
    {
        $this->aspectMode = $aspectMode;

        return $this;
    }
}

