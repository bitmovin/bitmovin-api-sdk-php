<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Imsc;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ImscConfiguration;

class ImscConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ImscConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ImscConfiguration::class);
    }
}
