<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CodecConfiguration;

class CodecConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CodecConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CodecConfiguration::class);
    }
}
