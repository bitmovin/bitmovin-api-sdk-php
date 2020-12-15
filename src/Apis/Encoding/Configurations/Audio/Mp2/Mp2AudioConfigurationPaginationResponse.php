<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp2;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Mp2AudioConfiguration;

class Mp2AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Mp2AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Mp2AudioConfiguration::class);
    }
}
