<?php

namespace BitmovinApiSdk\Apis\Encoding\History\Encodings;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\Encoding;

class EncodingPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var Encoding[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, Encoding::class);
    }
}
