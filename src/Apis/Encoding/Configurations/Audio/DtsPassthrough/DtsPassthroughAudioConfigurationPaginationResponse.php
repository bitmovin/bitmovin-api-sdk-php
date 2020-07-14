<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\DtsPassthrough;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DtsPassthroughAudioConfiguration;

class DtsPassthroughAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DtsPassthroughAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DtsPassthroughAudioConfiguration::class);
    }
}
