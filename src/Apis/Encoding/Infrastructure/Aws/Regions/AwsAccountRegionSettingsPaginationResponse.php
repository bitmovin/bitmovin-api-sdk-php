<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\Aws\Regions;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AwsAccountRegionSettings;

class AwsAccountRegionSettingsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AwsAccountRegionSettings[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AwsAccountRegionSettings::class);
    }
}
