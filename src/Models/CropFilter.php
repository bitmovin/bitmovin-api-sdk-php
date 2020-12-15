<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class CropFilter extends Filter
{
    /** @var int */
    public $left;

    /** @var int */
    public $right;

    /** @var int */
    public $top;

    /** @var int */
    public $bottom;

    /** @var \BitmovinApiSdk\Models\PositionUnit */
    public $unit;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->unit = ObjectMapper::map($this->unit, PositionUnit::class);
    }

    /**
     * Amount of pixels that will be cropped of the input video from the left side. Must be zero or a positive value.
     *
     * @param int $left
     * @return $this
     */
    public function left(int $left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Amount of pixels that will be cropped of the input video from the right side. Must be zero or a positive value.
     *
     * @param int $right
     * @return $this
     */
    public function right(int $right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Amount of pixels that will be cropped of the input video from the top. Must be zero or a positive value.
     *
     * @param int $top
     * @return $this
     */
    public function top(int $top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Amount of pixels that will be cropped of the input video from the bottom. Must be zero or a positive value.
     *
     * @param int $bottom
     * @return $this
     */
    public function bottom(int $bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * unit
     *
     * @param \BitmovinApiSdk\Models\PositionUnit $unit
     * @return $this
     */
    public function unit(\BitmovinApiSdk\Models\PositionUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }
}

