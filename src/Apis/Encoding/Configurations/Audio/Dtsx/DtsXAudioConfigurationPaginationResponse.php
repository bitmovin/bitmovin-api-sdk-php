<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Audio\Dtsx;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DtsXAudioConfiguration;

class DtsXAudioConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DtsXAudioConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DtsXAudioConfiguration::class);
    }
}
