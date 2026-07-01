<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265v2;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\H265V2VideoConfiguration;

class H265V2VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var H265V2VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, H265V2VideoConfiguration::class);
    }
}
