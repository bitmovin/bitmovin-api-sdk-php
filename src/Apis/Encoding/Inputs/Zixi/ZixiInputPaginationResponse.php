<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Zixi;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ZixiInput;

class ZixiInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ZixiInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ZixiInput::class);
    }
}
