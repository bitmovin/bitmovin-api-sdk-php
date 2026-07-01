<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class H265V2ConstantBitrateModeConfig extends H265V2RateControlModeConfig
{
    /** @var bool */
    public $fillerdata;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Enable filler data for constant bitrate mode.
     *
     * @param bool $fillerdata
     * @return $this
     */
    public function fillerdata(bool $fillerdata)
    {
        $this->fillerdata = $fillerdata;

        return $this;
    }
}

