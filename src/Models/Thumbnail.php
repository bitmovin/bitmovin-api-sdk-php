<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Thumbnail extends BitmovinResource
{
    /** @var int */
    public $height;

    /** @var string */
    public $pattern;

    /** @var float */
    public $interval;

    /** @var float[] */
    public $positions;

    /** @var \BitmovinApiSdk\Models\EncodingOutput[] */
    public $outputs;

    /** @var ThumbnailUnit */
    public $unit;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
        $this->outputs = ObjectMapper::map($this->outputs, EncodingOutput::class);
        $this->unit = ObjectMapper::map($this->unit, ThumbnailUnit::class);
    }

    /**
     * Height of the thumbnail. (required)
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
     * Pattern which describes the thumbnail filenames. For example with thumbnail-%number%.png as pattern and 3 positions: thumbnail-3_0.png, thumbnail-5_0.png and thumbnail-25_5.png. (The number represents the position in the source video in seconds, in the previous example the first filename represents the thumbnail at 3s, the second one at 5s and the third one at 25.5s).
     *
     * @param string $pattern
     * @return $this
     */
    public function pattern(string $pattern)
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * The interval in which to create thumbnails. In seconds (E.g. a value of 4 means create a thumbnail every 4 seconds). Mutually exclusive with positions/unit. Has to be equal to or greater than 1.
     *
     * @param float $interval
     * @return $this
     */
    public function interval(float $interval)
    {
        $this->interval = $interval;

        return $this;
    }

    /**
     * Position in the unit where the thumbnail should be created from. Mutually exclusive with interval.
     *
     * @param float[] $positions
     * @return $this
     */
    public function positions(array $positions)
    {
        $this->positions = $positions;

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
     * Unit of the values in the positions array.
     *
     * @param ThumbnailUnit $unit
     * @return $this
     */
    public function unit(ThumbnailUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }
}

