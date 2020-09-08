<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Pcm;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PcmAudioConfiguration;

class PcmAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PcmAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PcmAudioConfiguration::class);
    }
}
