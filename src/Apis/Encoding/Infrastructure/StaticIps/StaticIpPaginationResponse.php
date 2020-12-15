<?php

namespace BitmovinApiSdk\Apis\Encoding\Infrastructure\StaticIps;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StaticIp;

class StaticIpPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StaticIp[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StaticIp::class);
    }
}
