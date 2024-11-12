<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Akamai\Regions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AkamaiAccountRegionSettings;

class AkamaiAccountRegionSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AkamaiAccountRegionSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AkamaiAccountRegionSettings::class);
    }
}
