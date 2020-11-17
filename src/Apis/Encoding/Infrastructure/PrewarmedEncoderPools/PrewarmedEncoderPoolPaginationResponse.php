<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\PrewarmedEncoderPools;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\PrewarmedEncoderPool;

class PrewarmedEncoderPoolPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var PrewarmedEncoderPool[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, PrewarmedEncoderPool::class);
    }
}
