<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StandbyPools\Encodings;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LiveStandbyPoolEncoding;

class LiveStandbyPoolEncodingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LiveStandbyPoolEncoding[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LiveStandbyPoolEncoding::class);
    }
}
