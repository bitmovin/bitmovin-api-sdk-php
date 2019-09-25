<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Mp4\Drm\Widevine;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\WidevineDrm;

class WidevineDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var WidevineDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, WidevineDrm::class);
    }
}
