<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Vp9;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Vp9VideoConfiguration;

class Vp9VideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Vp9VideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Vp9VideoConfiguration::class);
    }
}
