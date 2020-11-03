<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Incidents;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsIncident;

class AnalyticsIncidentPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsIncident[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsIncident::class);
    }
}
