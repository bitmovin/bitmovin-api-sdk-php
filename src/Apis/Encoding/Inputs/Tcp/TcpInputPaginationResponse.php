<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Tcp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TcpInput;

class TcpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TcpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TcpInput::class);
    }
}
