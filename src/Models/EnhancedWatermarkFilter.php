<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class EnhancedWatermarkFilter extends Filter
{
    /** @var string */
    public $image;

    /** @var float */
    public $left;

    /** @var float */
    public $right;

    /** @var float */
    public $top;

    /** @var float */
    public $bottom;

    /** @var PositionUnit */
    public $unit;

    /** @var float */
    public $opacity;

    /** @var float */
    public $width;

    /** @var float */
    public $height;

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
     * @param float $left
     * @return $this
     */
    public function left(float $left)
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Distance from the right edge of the input video to the right edge of the watermark image . May not be set if &#39;left&#39; is set.
     *
     * @param float $right
     * @return $this
     */
    public function right(float $right)
    {
        $this->right = $right;

        return $this;
    }

    /**
     * Distance from the top edge of the input video to the top edge of the watermark image. May not be set if &#39;bottom&#39; is set.
     *
     * @param float $top
     * @return $this
     */
    public function top(float $top)
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Distance from the bottom edge of the input video to the bottom edge of the watermark image. May not be set if &#39;top&#39; is set.
     *
     * @param float $bottom
     * @return $this
     */
    public function bottom(float $bottom)
    {
        $this->bottom = $bottom;

        return $this;
    }

    /**
     * unit
     *
     * @param PositionUnit $unit
     * @return $this
     */
    public function unit(PositionUnit $unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Opacity to apply on the watermark image. Valid values are from 0.0 (completely transparent) to 1.0 (not transparent at all)
     *
     * @param float $opacity
     * @return $this
     */
    public function opacity(float $opacity)
    {
        $this->opacity = $opacity;

        return $this;
    }

    /**
     * Desired width of the watermark image, the unit of the parameter is specified separately by the parameter &#39;unit&#39;. If both width and height are set the watermark size is fixed. If only one is set the aspect ratio of the image will be used to rescale it
     *
     * @param float $width
     * @return $this
     */
    public function width(float $width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Desired height of the watermark image, the unit of the parameter is specified separately by the parameter &#39;unit&#39;. If both width and height are set the watermark size is fixed. If only one is set the aspect ratio of the image will be used to rescale it
     *
     * @param float $height
     * @return $this
     */
    public function height(float $height)
    {
        $this->height = $height;

        return $this;
    }
}

