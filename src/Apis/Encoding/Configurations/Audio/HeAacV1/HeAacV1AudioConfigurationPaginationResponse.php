<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV1;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HeAacV1AudioConfiguration;

class HeAacV1AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HeAacV1AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HeAacV1AudioConfiguration::class);
    }
}
