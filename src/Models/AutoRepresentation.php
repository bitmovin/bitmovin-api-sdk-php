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
     * This is the threshold that determines whether the settings of the lower or the upper template representation (codec configuration) should be used, when representations are added automatically. The value must be between 0 and 1. Values nearer 0 will favour the higher representation, values nearer 1 will favour the lower representation.
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

