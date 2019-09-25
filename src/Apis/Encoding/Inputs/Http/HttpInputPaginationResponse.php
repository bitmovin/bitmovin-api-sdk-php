<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Http;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HttpInput;

class HttpInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HttpInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HttpInput::class);
    }
}
