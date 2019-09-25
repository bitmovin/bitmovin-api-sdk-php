<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Concatenation;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\ConcatenationInputStream;

class ConcatenationInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var ConcatenationInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, ConcatenationInputStream::class);
    }
}
