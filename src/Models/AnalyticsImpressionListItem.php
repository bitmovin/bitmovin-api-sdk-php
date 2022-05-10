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
     * Random UUID that is used to identify a session (required)
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

