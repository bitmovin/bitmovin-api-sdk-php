<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AutoRepresentation extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var float */
    public $adoptConfigurationThreshold;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * This is the threshold if the settings of the lower or the upper representation (codec configuration) should be used, when representations are added automatically
     *
     * @param float $adoptConfigurationThreshold
     * @return $this
     */
    public function adoptConfigurationThreshold(float $adoptConfigurationThreshold)
    {
        $this->adoptConfigurationThreshold = $adoptConfigurationThreshold;

        return $this;
    }
}

