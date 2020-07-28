<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DolbyAtmos;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyAtmosAudioConfiguration;

class DolbyAtmosAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyAtmosAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyAtmosAudioConfiguration::class);
    }
}
