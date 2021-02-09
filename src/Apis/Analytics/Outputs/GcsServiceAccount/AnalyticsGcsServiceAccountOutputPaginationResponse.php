<?php

namespace BitmovinApiSdk\Apis\Analytics\Outputs\GcsServiceAccount;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsGcsServiceAccountOutput;

class AnalyticsGcsServiceAccountOutputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsGcsServiceAccountOutput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsGcsServiceAccountOutput::class);
    }
}
