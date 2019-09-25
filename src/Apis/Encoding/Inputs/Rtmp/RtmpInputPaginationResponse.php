<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Rtmp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\RtmpInput;

class RtmpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var RtmpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, RtmpInput::class);
    }
}
