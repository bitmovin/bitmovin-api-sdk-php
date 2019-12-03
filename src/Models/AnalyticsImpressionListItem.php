<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsImpressionListItem extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var string */
    public $impressionId;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        
    }

    /**
     * Impression ID (required)
     *
     * @param string $impressionId
     * @return $this
     */
    public function impressionId(string $impressionId)
    {
        $this->impressionId = $impressionId;

        return $this;
    }
}

