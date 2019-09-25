<?php

namespace BitmovinApiSdk\Apis\Encoding\Manifests\Hls\Streams;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamInfo;

class StreamInfoPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamInfo[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamInfo::class);
    }
}
