<?php

namespace BitmovinApiSdk\Apis\Encoding\Inputs\Https;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\HttpsInput;

class HttpsInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var HttpsInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, HttpsInput::class);
    }
}
