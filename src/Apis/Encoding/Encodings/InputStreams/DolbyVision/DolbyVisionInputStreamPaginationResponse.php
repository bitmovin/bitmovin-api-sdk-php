<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\DolbyVision;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\DolbyVisionInputStream;

class DolbyVisionInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var DolbyVisionInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, DolbyVisionInputStream::class);
    }
}
