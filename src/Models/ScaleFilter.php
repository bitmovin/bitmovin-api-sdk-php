<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ScaleFilter extends Filter
{
    /** @var int */
    public $width;

    /** @var int */
    public $height;

    /** @var ScalingAlgorithm */
    public $scalingAlgorithm;

    /** @var int */
    public $sampleAspectRatioNumerator;

    /** @var int */
    public $sampleAspectRatioDenominator;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->scalingAlgorithm = ObjectMapper::map($this->scalingAlgorithm, ScalingAlgorithm::class);
    }

    /**
     * The width of the output frame in pixels. If not set it will be based on the configured height by maintaining the original aspect ratio. If height is also not set, the original source dimensions will be applied.
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
     * The height of the output frame in pixels. If not set it will be based on the configured width by maintaining the original aspect ratio. If width is also not set, the original source dimensions will be applied.
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
     * scalingAlgorithm
     *
     * @param ScalingAlgorithm $scalingAlgorithm
     * @return $this
     */
    public function scalingAlgorithm(ScalingAlgorithm $scalingAlgorithm)
    {
        $this->scalingAlgorithm = $scalingAlgorithm;

        return $this;
    }

    /**
     * The numerator of the sample aspect ratio (also known as pixel aspect ratio). Must be set if sampleAspectRatioDenominator is set.
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
     * The denominator of the sample aspect ratio (also known as pixel aspect ratio). Must be set if sampleAspectRatioNumerator is set.
     *
     * @param int $sampleAspectRatioDenominator
     * @return $this
     */
    public function sampleAspectRatioDenominator(int $sampleAspectRatioDenominator)
    {
        $this->sampleAspectRatioDenominator = $sampleAspectRatioDenominator;

        return $this;
    }
}

