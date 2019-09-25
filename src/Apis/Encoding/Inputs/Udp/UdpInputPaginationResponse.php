<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Udp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\UdpInput;

class UdpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var UdpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, UdpInput::class);
    }
}
