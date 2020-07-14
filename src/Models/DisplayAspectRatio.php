<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class DisplayAspectRatio extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var int */
    public $numerator;

    /** @var int */
    public $denominator;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * The numerator of the display aspect ratio (DAR). For example for a DAR of 16:9, the value 16 must be used. (required)
     *
     * @param int $numerator
     * @return $this
     */
    public function numerator(int $numerator)
    {
        $this->numerator = $numerator;

        return $this;
    }

    /**
     * The denominator of the display aspect ratio (DAR). For example for a DAR of 16:9, the value 9 must be used. (required)
     *
     * @param int $denominator
     * @return $this
     */
    public function denominator(int $denominator)
    {
        $this->denominator = $denominator;

        return $this;
    }
}

