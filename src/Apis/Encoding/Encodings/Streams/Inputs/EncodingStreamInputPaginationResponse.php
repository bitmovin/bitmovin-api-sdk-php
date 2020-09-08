<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Inputs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\EncodingStreamInput;

class EncodingStreamInputPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var EncodingStreamInput[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, EncodingStreamInput::class);
    }
}
