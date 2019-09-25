<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H265;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\H265VideoConfiguration;

class H265VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var H265VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, H265VideoConfiguration::class);
    }
}
