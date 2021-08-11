<?php

namespace BitmovinApiSdk\Models;

use Carbon\Carbon;
use BitmovinApiSdk\Common\ObjectMapper;

class AnalyticsErrorDetailsResponse extends \BitmovinApiSdk\Common\ApiResource
{
    /** @var \BitmovinApiSdk\Models\AnalyticsErrorDetail[] */
    public $errorDetails;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);
        $this->errorDetails = ObjectMapper::map($this->errorDetails, AnalyticsErrorDetail::class);
    }

    /**
     * errorDetails
     *
     * @param \BitmovinApiSdk\Models\AnalyticsErrorDetail[] $errorDetails
     * @return $this
     */
    public function errorDetails(array $errorDetails)
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }
}

