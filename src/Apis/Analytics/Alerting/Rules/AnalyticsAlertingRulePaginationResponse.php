<?php

namespace BitmovinApiSdk\Apis\Analytics\Alerting\Rules;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsAlertingRule;

class AnalyticsAlertingRulePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsAlertingRule[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsAlertingRule::class);
    }
}
