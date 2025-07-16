<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Hls;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HlsInput;

class HlsInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HlsInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HlsInput::class);
    }
}
