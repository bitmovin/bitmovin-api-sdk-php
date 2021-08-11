<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dts;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DtsAudioConfiguration;

class DtsAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DtsAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DtsAudioConfiguration::class);
    }
}
