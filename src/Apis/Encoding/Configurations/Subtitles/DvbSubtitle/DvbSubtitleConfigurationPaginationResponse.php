<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\DvbSubtitle;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DvbSubtitleConfiguration;

class DvbSubtitleConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DvbSubtitleConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DvbSubtitleConfiguration::class);
    }
}
