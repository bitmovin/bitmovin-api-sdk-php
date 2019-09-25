<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\UdpMulticast;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\UdpMulticastInput;

class UdpMulticastInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var UdpMulticastInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, UdpMulticastInput::class);
    }
}
