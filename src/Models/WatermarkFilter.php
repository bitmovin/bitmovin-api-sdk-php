<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WatermarkFilter extends Filter
{
    /** @var string */
    public $image;

    /** @var int */
    public $left;

    /** @var int */
    public $right;

    /** @var int */
    public $top;

    /** @var int */
    public $bottom;

    /** @var PositionUnit */
    public $unit;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->unit = ObjectMapper::map($this->unit, PositionUnit::class);
    }

    /**
     * URL of the file to be used as watermark image. Supported image formats: PNG, JPEG, BMP, GIF (required)
     *
     * @param string $image
     * @return $this
     */
    public function image(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Distance from the left edge of the input video to the left edge of the watermark image. May not be set if &#39;right&#39; is set.
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
     * Distance from the right edge of the input video to the right edge of the watermark image . May not be set if &#39;left&#39; is set.
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
     * Distance from the top edge of the input video to the top edge of the watermark image. May not be set if &#39;bottom&#39; is set.
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
     * Distance from the bottom edge of the input video to the bottom edge of the watermark image. May not be set if &#39;top&#39; is set.
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
     * Specifies if the values of &#39;left&#39;, &#39;right&#39;, &#39;top&#39; and &#39;bottom&#39; are interpreted as pixels or as a percentage of the input video&#39;s dimensions.
     *
     * @param PositionUnit $unit
     * @return $this
     */
    public function unit(PositionUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }
}

