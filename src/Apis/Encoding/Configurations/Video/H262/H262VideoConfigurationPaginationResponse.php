<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\H262;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\H262VideoConfiguration;

class H262VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var H262VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, H262VideoConfiguration::class);
    }
}
