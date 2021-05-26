<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\Azure;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsAzureOutput;

class AnalyticsAzureOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsAzureOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsAzureOutput::class);
    }
}
