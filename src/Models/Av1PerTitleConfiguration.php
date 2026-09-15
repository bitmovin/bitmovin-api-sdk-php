<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Av1PerTitleConfiguration extends PerTitleConfiguration
{
    /** @var float */
    public $targetQualityCrf;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
    }

    /**
     * Desired target quality of the highest representation expressed as a CRF value. If not set, it is derived from the content, starting from 34 for SDR content of at most FullHD and at most 30 fps; HFR (more than 30 fps) reduces it by 2; a resolution above FullHD reduces it by 2; HDR10 or HLG reduces it by 2; and Dolby Vision reduces it by 4 instead of the HDR10 reduction. These reductions are cumulative, so the lowest derived value is 26, for Dolby Vision 4K at 60 fps.
     *
     * @param float $targetQualityCrf
     * @return $this
     */
    public function targetQualityCrf(float $targetQualityCrf)
    {
        $this->targetQualityCrf = $targetQualityCrf;

        return $this;
    }
}

