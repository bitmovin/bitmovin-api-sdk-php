<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Subtitles\Webvtt;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WebVttConfiguration;

class WebVttConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WebVttConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WebVttConfiguration::class);
    }
}
