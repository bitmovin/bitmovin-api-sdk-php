<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class Vp9PerTitleConfiguration extends PerTitleConfiguration
{
    /** @var float */
    public $targetQualityCrf;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Desired target quality of the highest representation expressed as CRF value
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

