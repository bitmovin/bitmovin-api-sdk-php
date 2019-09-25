<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Mp3;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Mp3AudioConfiguration;

class Mp3AudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Mp3AudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Mp3AudioConfiguration::class);
    }
}
