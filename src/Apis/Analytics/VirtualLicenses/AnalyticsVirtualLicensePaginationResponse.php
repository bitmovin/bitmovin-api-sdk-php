<?php

namespace BitmovinApiSdk\Apis\Analytics\VirtualLicenses;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AnalyticsVirtualLicense;

class AnalyticsVirtualLicensePaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AnalyticsVirtualLicense[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AnalyticsVirtualLicense::class);
    }
}
