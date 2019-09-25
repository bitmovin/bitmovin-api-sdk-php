<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\InputStream;

class InputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var InputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, InputStream::class);
    }
}
