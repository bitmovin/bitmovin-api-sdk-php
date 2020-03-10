<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CustomTag extends BitmovinResource
{
    /** @var PositionMode */
    public $positionMode;

    /** @var string */
    public $keyframeId;

    /** @var float */
    public $time;

    /** @var int */
    public $segment;

    /** @var string */
    public $data;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->positionMode = ObjectMapper::map($this->positionMode, PositionMode::class);
    }

    /**
     * The positioning mode that should be used when inserting the placement opportunity (required)
     *
     * @param PositionMode $positionMode
     * @return $this
     */
    public function positionMode(PositionMode $positionMode)
    {
        $this->positionMode = $positionMode;

        return $this;
    }

    /**
     * Id of keyframe where the custom tag should be inserted. Required, when KEYFRAME is selected as position mode.
     *
     * @param string $keyframeId
     * @return $this
     */
    public function keyframeId(string $keyframeId)
    {
        $this->keyframeId = $keyframeId;

        return $this;
    }

    /**
     * Time in seconds where the custom tag should be inserted. Required, when TIME is selected as position mode.
     *
     * @param float $time
     * @return $this
     */
    public function time(float $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * The custom tag will be inserted before the specified segment. Required, when SEGMENT is selected as position mode.
     *
     * @param int $segment
     * @return $this
     */
    public function segment(int $segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * The data to be contained in the custom tag. (required)
     *
     * @param string $data
     * @return $this
     */
    public function data(string $data)
    {
        $this->data = $data;

        return $this;
    }
}

