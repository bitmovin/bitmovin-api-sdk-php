<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\HeAacV2;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HeAacV2AudioConfiguration;

class HeAacV2AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HeAacV2AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HeAacV2AudioConfiguration::class);
    }
}
