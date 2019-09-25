<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Local;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\LocalInput;

class LocalInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var LocalInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, LocalInput::class);
    }
}
