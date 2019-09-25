<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\RedundantRtmp;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\RedundantRtmpInput;

class RedundantRtmpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var RedundantRtmpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, RedundantRtmpInput::class);
    }
}
