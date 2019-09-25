<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Muxings\Cmaf;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\CmafMuxing;

class CmafMuxingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var CmafMuxing[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, CmafMuxing::class);
    }
}
