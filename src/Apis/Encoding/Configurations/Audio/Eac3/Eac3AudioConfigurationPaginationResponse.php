<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Eac3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Eac3AudioConfiguration;

class Eac3AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Eac3AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Eac3AudioConfiguration::class);
    }
}
