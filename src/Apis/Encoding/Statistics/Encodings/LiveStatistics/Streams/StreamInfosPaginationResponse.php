<?php

namespace BitmovinApiSdk\Apis\Encoding\Statistics\Encodings\LiveStatistics\Streams;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamInfos;

class StreamInfosPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamInfos[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamInfos::class);
    }
}
