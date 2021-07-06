<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyDigital;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyDigitalAudioConfiguration;

class DolbyDigitalAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyDigitalAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyDigitalAudioConfiguration::class);
    }
}
