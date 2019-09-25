<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class WebVttConfiguration extends BitmovinResource
{
    /** @var bool */
    public $appendOptionalZeroHour;

    /** @var bool */
    public $ignoreRegion;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * If set to true, the hours section on webvtt timestamp values will explicitely have zeroes instead of being omitted for values where hours &#x3D; 0.
     *
     * @param bool $appendOptionalZeroHour
     * @return $this
     */
    public function appendOptionalZeroHour(bool $appendOptionalZeroHour)
    {
        $this->appendOptionalZeroHour = $appendOptionalZeroHour;

        return $this;
    }

    /**
     * If set to true, the region information of the resulting webvtt file will be omitted. Defaults to false.
     *
     * @param bool $ignoreRegion
     * @return $this
     */
    public function ignoreRegion(bool $ignoreRegion)
    {
        $this->ignoreRegion = $ignoreRegion;

        return $this;
    }
}

