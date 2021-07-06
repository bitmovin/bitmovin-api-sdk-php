<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigitalPlus;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyDigitalPlusAudioConfiguration;

class DolbyDigitalPlusAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyDigitalPlusAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyDigitalPlusAudioConfiguration::class);
    }
}
