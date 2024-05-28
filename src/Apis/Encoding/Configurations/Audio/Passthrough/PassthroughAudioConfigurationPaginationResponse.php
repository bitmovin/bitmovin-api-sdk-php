<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Passthrough;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PassthroughAudioConfiguration;

class PassthroughAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PassthroughAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PassthroughAudioConfiguration::class);
    }
}
