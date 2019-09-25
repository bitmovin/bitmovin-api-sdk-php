<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Aac;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\AacAudioConfiguration;

class AacAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var AacAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, AacAudioConfiguration::class);
    }
}
