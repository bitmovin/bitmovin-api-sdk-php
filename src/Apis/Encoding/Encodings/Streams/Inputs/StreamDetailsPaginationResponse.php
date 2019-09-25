<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\Streams\Inputs;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\StreamDetails;

class StreamDetailsPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var StreamDetails[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, StreamDetails::class);
    }
}
