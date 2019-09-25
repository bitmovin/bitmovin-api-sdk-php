<?php

namespace BitmovinApiSdk\Apis\Encoding\Encodings\InputStreams\Trimming\TimeBased;

use \BitmovinApiSdk\Common\ObjectMapper;
use \BitmovinApiSdk\Models\TimeBasedTrimmingInputStream;

class TimeBasedTrimmingInputStreamPaginationResponse extends \BitmovinApiSdk\Common\BasePaginationResponse
{
    /** @var TimeBasedTrimmingInputStream[] */
    public $items;

    public function __construct($attributes = null)
    {
        parent::__construct($attributes);

        $this->items = ObjectMapper::map($this->items, TimeBasedTrimmingInputStream::class);
    }
}
