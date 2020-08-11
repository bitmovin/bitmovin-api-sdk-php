<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Gce\Regions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\GceAccountRegionSettings;

class GceAccountRegionSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var GceAccountRegionSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, GceAccountRegionSettings::class);
    }
}
