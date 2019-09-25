<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H264;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\H264VideoConfiguration;

class H264VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var H264VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, H264VideoConfiguration::class);
    }
}
