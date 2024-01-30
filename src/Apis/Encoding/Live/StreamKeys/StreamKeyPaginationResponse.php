<?php

namespace BitmovinApiSdk\Apis\Encoding\Live\StreamKeys;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamKey;

class StreamKeyPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamKey[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamKey::class);
    }
}
