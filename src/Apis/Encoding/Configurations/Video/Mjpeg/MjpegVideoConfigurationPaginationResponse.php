<?php

namespace BitmovinApiSdk\Apis\Encoding\Configurations\Video\Mjpeg;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\MjpegVideoConfiguration;

class MjpegVideoConfigurationPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var MjpegVideoConfiguration[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, MjpegVideoConfiguration::class);
    }
}
