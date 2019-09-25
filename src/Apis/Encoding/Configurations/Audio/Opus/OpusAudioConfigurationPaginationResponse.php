<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Opus;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\OpusAudioConfiguration;

class OpusAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var OpusAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, OpusAudioConfiguration::class);
    }
}
