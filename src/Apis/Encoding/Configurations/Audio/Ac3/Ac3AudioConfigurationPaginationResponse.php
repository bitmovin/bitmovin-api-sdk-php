<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Ac3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Ac3AudioConfiguration;

class Ac3AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Ac3AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Ac3AudioConfiguration::class);
    }
}
