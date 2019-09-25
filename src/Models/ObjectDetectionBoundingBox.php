<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class ObjectDetectionBoundingBox extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $topLeftX;

    /** @var float */
    public $topLeftY;

    /** @var float */
    public $bottomRightX;

    /** @var float */
    public $bottomRightY;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Horizontal position of the top left corner, given as a fraction of the frame width
     *
     * @param float $topLeftX
     * @return $this
     */
    public function topLeftX(float $topLeftX)
    {
        $this->topLeftX = $topLeftX;

        return $this;
    }

    /**
     * Vertical position of the top left corner, given as a fraction of the frame height
     *
     * @param float $topLeftY
     * @return $this
     */
    public function topLeftY(float $topLeftY)
    {
        $this->topLeftY = $topLeftY;

        return $this;
    }

    /**
     * Horizontal position of the bottom right corner, given as a fraction of the frame width
     *
     * @param float $bottomRightX
     * @return $this
     */
    public function bottomRightX(float $bottomRightX)
    {
        $this->bottomRightX = $bottomRightX;

        return $this;
    }

    /**
     * Vertical position of the bottom right corner, given as a fraction of the frame height
     *
     * @param float $bottomRightY
     * @return $this
     */
    public function bottomRightY(float $bottomRightY)
    {
        $this->bottomRightY = $bottomRightY;

        return $this;
    }
}

