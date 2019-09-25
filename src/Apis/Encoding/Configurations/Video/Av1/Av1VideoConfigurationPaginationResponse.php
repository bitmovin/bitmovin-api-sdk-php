<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Av1;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Av1VideoConfiguration;

class Av1VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Av1VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Av1VideoConfiguration::class);
    }
}
