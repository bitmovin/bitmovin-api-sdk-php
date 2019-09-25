<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp8;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Vp8VideoConfiguration;

class Vp8VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Vp8VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Vp8VideoConfiguration::class);
    }
}
