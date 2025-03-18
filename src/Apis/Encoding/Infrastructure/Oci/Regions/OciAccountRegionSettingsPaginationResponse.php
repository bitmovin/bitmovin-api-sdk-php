<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Oci\Regions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\OciAccountRegionSettings;

class OciAccountRegionSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var OciAccountRegionSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, OciAccountRegionSettings::class);
    }
}
