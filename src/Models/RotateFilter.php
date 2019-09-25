<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class RotateFilter extends Filter
{
    /** @var int */
    public $rotation;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Rotation of the video in degrees. A positive value will rotate the video clockwise and a negative one counter clockwise. (required)
     *
     * @param int $rotation
     * @return $this
     */
    public function rotation(int $rotation)
    {
        $this->rotation = $rotation;

        return $this;
    }
}

