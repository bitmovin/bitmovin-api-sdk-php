<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Fmp4\Drm\Marlin;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\MarlinDrm;

class MarlinDrmPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var MarlinDrm[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, MarlinDrm::class);
    }
}
