<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Azure\Regions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AzureAccountRegionSettings;

class AzureAccountRegionSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AzureAccountRegionSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AzureAccountRegionSettings::class);
    }
}
